<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing');
    }
    public function srtLanding()
    {
        return view('landings.srt');
    }

    public function vttLanding()
    {
        return view('landings.vtt');
    }
}