<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing')
            ->with('title', 'Vocaldo - AI-Powered Audio Transcription')
            ->with('meta_description', 'Vocaldo offers fast, accurate AI-powered audio transcription. Convert speech to text in multiple languages, generate summaries, and more.');
    }

    public function srtLanding()
    {
        return view('landings.srt')
            ->with('title', 'Vocaldo - SRT File Generator')
            ->with('meta_description', 'Generate accurate SRT files for your videos with Vocaldo\'s AI-powered transcription. Perfect for adding subtitles to your content.');
    }

    public function vttLanding()
    {
        return view('landings.vtt')
            ->with('title', 'Vocaldo - VTT File Generator')
            ->with('meta_description', 'Create VTT files easily with Vocaldo\'s advanced transcription technology. Ideal for adding captions to your web videos.');
    }
}