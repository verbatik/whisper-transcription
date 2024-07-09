<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{


    private $supportedLanguages = [
        'english' => 'English',
        'spanish' => 'Spanish',
        'french' => 'French',
        'german' => 'German',
        'italian' => 'Italian',
        'portuguese' => 'Portuguese',
        'dutch' => 'Dutch',
        'russian' => 'Russian',
        'japanese' => 'Japanese',
        'chinese' => 'Chinese',
        'korean' => 'Korean',
        'arabic' => 'Arabic',
        'hindi' => 'Hindi',
        'bengali' => 'Bengali',
        'urdu' => 'Urdu',
        'turkish' => 'Turkish',
        'persian' => 'Persian',
        'vietnamese' => 'Vietnamese',
        'thai' => 'Thai',
        'indonesian' => 'Indonesian',
        'malay' => 'Malay',
        'swahili' => 'Swahili',
        'polish' => 'Polish',
        'ukrainian' => 'Ukrainian',
        'greek' => 'Greek',
        'czech' => 'Czech',
        'swedish' => 'Swedish',
        'danish' => 'Danish',
        'norwegian' => 'Norwegian',
        'finnish' => 'Finnish',
        'hungarian' => 'Hungarian',
        'romanian' => 'Romanian',
        'bulgarian' => 'Bulgarian',
        'hebrew' => 'Hebrew',
        'slovak' => 'Slovak',
        'croatian' => 'Croatian',
        'serbian' => 'Serbian',
        'slovenian' => 'Slovenian',
        'lithuanian' => 'Lithuanian',
        'latvian' => 'Latvian',
        'estonian' => 'Estonian',
        'albanian' => 'Albanian',
        'macedonian' => 'Macedonian',
        'maltese' => 'Maltese',
        'icelandic' => 'Icelandic',
        'welsh' => 'Welsh',
        'basque' => 'Basque',
        'catalan' => 'Catalan',
        'galician' => 'Galician',
        'irish' => 'Irish',
        'scots_gaelic' => 'Scots Gaelic',
        'afrikaans' => 'Afrikaans',
        'azerbaijani' => 'Azerbaijani',
        'belarusian' => 'Belarusian',
        'bosnian' => 'Bosnian',
        'burmese' => 'Burmese',
        'cebuano' => 'Cebuano',
        'chichewa' => 'Chichewa',
        'corsican' => 'Corsican',
        'esperanto' => 'Esperanto',
        'filipino' => 'Filipino',
        'frisian' => 'Frisian',
        'georgian' => 'Georgian',
        'gujarati' => 'Gujarati',
        'haitian_creole' => 'Haitian Creole',
        'hausa' => 'Hausa',
        'hawaiian' => 'Hawaiian',
        'hmong' => 'Hmong',
        'igbo' => 'Igbo',
        'javanese' => 'Javanese',
        'kannada' => 'Kannada',
        'kazakh' => 'Kazakh',
        'khmer' => 'Khmer',
        'kurdish' => 'Kurdish',
        'kyrgyz' => 'Kyrgyz',
        'lao' => 'Lao',
        'luxembourgish' => 'Luxembourgish',
        'malagasy' => 'Malagasy',
        'malayalam' => 'Malayalam',
        'maori' => 'Maori',
        'marathi' => 'Marathi',
        'mongolian' => 'Mongolian',
        'nepali' => 'Nepali',
        'pashto' => 'Pashto',
        'punjabi' => 'Punjabi',
        'samoan' => 'Samoan',
        'sesotho' => 'Sesotho',
        'shona' => 'Shona',
        'sindhi' => 'Sindhi',
        'sinhala' => 'Sinhala',
        'somali' => 'Somali',
        'sundanese' => 'Sundanese',
        'tajik' => 'Tajik',
        'tamil' => 'Tamil',
        'telugu' => 'Telugu',
        'turkmen' => 'Turkmen',
        'uzbek' => 'Uzbek',
        'xhosa' => 'Xhosa',
        'yiddish' => 'Yiddish',
        'yoruba' => 'Yoruba',
        'zulu' => 'Zulu',
    ];

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

    public function languageLanding($language)
    {
        if (!array_key_exists($language, $this->supportedLanguages)) {
            abort(404);
        }

        $languageName = $this->supportedLanguages[$language];

        return view('landings.language', [
            'language' => $language,
            'languageName' => $languageName,
        ]);
    }

    public function languageList()
    {
        return view('landings.language-list', [
            'languages' => $this->supportedLanguages,
        ]);
    }

    
}