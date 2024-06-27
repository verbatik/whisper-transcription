<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Storage;
use FFMpeg\FFMpeg;

class AudioFileController extends Controller
{
    public function index()
    {
        $audioFiles = auth()->user()->audioFiles()->orderBy('created_at', 'desc')->paginate(10);
        return view('audio_files.index', compact('audioFiles'));
    }


    public function create()
    {
        $user = auth()->user();
        $canTranscribe = $user->canGenerateTranscription();
        return view('audio_files.create', compact('canTranscribe'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        if (!$user->canGenerateTranscription()) {
            return redirect()->route('audio_files.create')
                ->with('error', 'Your daily limit is exhausted. Please wait until tomorrow or upgrade to the unlimited version.');
        }

        $request->validate([
            'audio_file' => 'required|file|mimes:mp3,wav,ogg,mp4,mov,avi|max:25600',
        ]);

        $file = $request->file('audio_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('audio_files', $fileName, 'public');

        $audioFile = AudioFile::create([
            'user_id' => $user->id,
            'file_name' => $fileName,
            'file_path' => $filePath,
        ]);

        // Extract audio if it's a video file
        $fileExtension = $file->getClientOriginalExtension();
        if (in_array($fileExtension, ['mp4', 'mov', 'avi'])) {
            $ffmpeg = FFMpeg::create();
            $video = $ffmpeg->open(storage_path('app/public/' . $filePath));
            $audioFileName = pathinfo($fileName, PATHINFO_FILENAME) . '.mp3';
            $audioFilePath = 'audio_files/' . $audioFileName;
            $video->save(new \FFMpeg\Format\Audio\Mp3(), storage_path('app/public/' . $audioFilePath));
            
            // Update file path to the extracted audio
            $filePath = $audioFilePath;
        }

        // Transcribe the audio file using OpenAI Whisper
        $response = OpenAI::audio()->transcribe([
            'model' => 'whisper-1',
            'file' => fopen(storage_path('app/public/' . $filePath), 'r'),
            'response_format' => 'verbose_json',
        ]);
    
        $transcription = $this->formatTranscription($response->segments);

        $segments = $response->segments;

        // Generate SRT file
        $srtContent = $this->generateSrtContent($segments);
        $srtFileName = pathinfo($fileName, PATHINFO_FILENAME) . '.srt';
        Storage::disk('public')->put('transcriptions/' . $srtFileName, $srtContent);

        // Generate VTT file
        $vttContent = $this->generateVttContent($segments);
        $vttFileName = pathinfo($fileName, PATHINFO_FILENAME) . '.vtt';
        Storage::disk('public')->put('transcriptions/' . $vttFileName, $vttContent);

        $audioFile->update([
            'transcription' => $transcription,
            'srt_path' => 'transcriptions/' . $srtFileName,
            'vtt_path' => 'transcriptions/' . $vttFileName,
        ]);

        $user->incrementDailyGenerations();

        return redirect()->route('audio_files.index')->with('success', 'Audio file uploaded and transcribed successfully.');
    }

    public function show(AudioFile $audioFile)
    {
        return view('audio_files.show', compact('audioFile'));
    }

    private function generateSrtContent($segments)
    {
        $srtContent = '';
        foreach ($segments as $index => $segment) {
            $srtContent .= $index + 1 . "\n";
            $srtContent .= $this->formatTimestamp($segment['start']) . ' --> ' . $this->formatTimestamp($segment['end']) . "\n";
            $srtContent .= $segment['text'] . "\n\n";
        }
        return $srtContent;
    }

    private function generateVttContent($segments)
    {
        $vttContent = "WEBVTT\n\n";
        foreach ($segments as $segment) {
            $vttContent .= $this->formatTimestamp($segment['start']) . ' --> ' . $this->formatTimestamp($segment['end']) . "\n";
            $vttContent .= $segment['text'] . "\n\n";
        }
        return $vttContent;
    }

    private function formatTranscription($segments)
    {
        $formattedTranscription = '';
        foreach ($segments as $segment) {
            $startTime = $this->formatTimestamp($segment['start']);
            $endTime = $this->formatTimestamp($segment['end']);
            $formattedTranscription .= "[{$startTime} - {$endTime}] {$segment['text']}\n";
        }
        return $formattedTranscription;
    }

    private function formatTimestamp($seconds)
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $secs = $seconds % 60;
        return sprintf('%02d:%02d:%06.3f', $hours, $minutes, $secs);
    }
}