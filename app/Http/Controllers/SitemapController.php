<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function index()
    {
        $content = view('sitemap')->render();

        return response($content)
            ->header('Content-Type', 'text/xml');
    }
}