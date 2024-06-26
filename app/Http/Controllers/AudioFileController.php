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
    
        $transcription = $this->formatTranscription($response->segments, $user);
        $segments = $response->segments;

        // Generate SRT file
        $srtContent = $this->generateSrtContent($segments, $user);
        $srtFileName = pathinfo($fileName, PATHINFO_FILENAME) . '.srt';
        Storage::disk('public')->put('transcriptions/' . $srtFileName, $srtContent);

        // Generate VTT file
        $vttContent = $this->generateVttContent($segments, $user);
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

    private function generateSrtContent($segments, $user)
    {
        $srtContent = '';
        $index = 1;
        if (!$user->is_subscriber) {
            $srtContent .= "$index\n00:00:00,000 --> 00:00:05,000\nGenerated by Vocaldo Transcribe, Buy Unlimited to remove this message\n\n";
            $index++;
        }
        foreach ($segments as $segment) {
            $srtContent .= $index . "\n";
            $srtContent .= $this->formatTimestamp($segment['start'], true) . ' --> ' . $this->formatTimestamp($segment['end'], true) . "\n";
            $srtContent .= $segment['text'] . "\n\n";
            $index++;
        }
        return $srtContent;
    }

    private function generateVttContent($segments, $user)
    {
        $vttContent = "WEBVTT\n\n";
        if (!$user->is_subscriber) {
            $vttContent .= "00:00:00.000 --> 00:00:05.000\nGenerated by Vocaldo Transcribe, Buy Unlimited to remove this message\n\n";
        }
        foreach ($segments as $segment) {
            $vttContent .= $this->formatTimestamp($segment['start']) . ' --> ' . $this->formatTimestamp($segment['end']) . "\n";
            $vttContent .= $segment['text'] . "\n\n";
        }
        return $vttContent;
    }

    private function formatTranscription($segments, $user)
    {
        $formattedTranscription = '';
        if (!$user->is_subscriber) {
            $formattedTranscription .= "[00:00:00 - 00:00:05] Generated by Vocaldo Transcribe, Buy Unlimited to remove this message\n\n";
        }
        foreach ($segments as $segment) {
            $startTime = $this->formatTimestamp($segment['start']);
            $endTime = $this->formatTimestamp($segment['end']);
            $formattedTranscription .= "[{$startTime} - {$endTime}] {$segment['text']}\n";
        }
        return $formattedTranscription;
    }

    private function formatTimestamp($seconds, $isSrt = false)
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $secs = $seconds % 60;
        if ($isSrt) {
            return sprintf('%02d:%02d:%02d,%03d', $hours, $minutes, floor($secs), ($secs - floor($secs)) * 1000);
        }
        return sprintf('%02d:%02d:%06.3f', $hours, $minutes, $secs);
    }
}