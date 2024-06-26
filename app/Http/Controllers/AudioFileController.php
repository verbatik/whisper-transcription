<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Storage;

class AudioFileController extends Controller
{
    public function index()
    {
        $audioFiles = auth()->user()->audioFiles()->orderBy('created_at', 'desc')->paginate(10);
        return view('audio_files.index', compact('audioFiles'));
    }

    public function create()
    {
        return view('audio_files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'audio_file' => 'required|file|mimes:mp3,wav,ogg|max:10240',
        ]);

        $file = $request->file('audio_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('audio_files', $fileName, 'public');

        $audioFile = AudioFile::create([
            'user_id' => auth()->id(),
            'file_name' => $fileName,
            'file_path' => $filePath,
        ]);

        // Transcribe the audio file using OpenAI Whisper
        $response = OpenAI::audio()->transcribe([
            'model' => 'whisper-1',
            'file' => fopen(storage_path('app/public/' . $filePath), 'r'),
            'response_format' => 'verbose_json',
        ]);
    
        $transcription = $this->formatTranscription($response->segments);

        $transcription = $response->text;
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