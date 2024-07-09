<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocaldo - Revolutionary Speech-to-Text in Any Language</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(90deg, #4F46E5, #06B6D4); }
        .hover-scale { transition: transform 0.3s; }
        .hover-scale:hover { transform: scale(1.05); }
    </style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-55M3QDFSWB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-55M3QDFSWB');
</script>

 <!-- PWA Meta Tags -->
 <meta name="theme-color" content="#4F46E5">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <link rel="apple-touch-icon" href="{{ asset('icons/192.png') }}">


 <!-- PWA Service Worker Registration -->
 <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "n2ihhkqeqd");
</script>

</head>
<body class="antialiased bg-gray-50 text-gray-800">
    <!-- Launch Discount Banner -->
    <div class="bg-yellow-400 text-black py-2 text-center">
        <p class="font-bold">🚀 Launch Discount: 30% OFF for Early Birds! Use coupon code BIRDS30 at checkout.</p>
    </div>
<body class="antialiased bg-gray-50 text-gray-800">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
    <div class="flex items-center mb-4 md:mb-0">
        <img src="/img/logo.svg" alt="Vocaldo STT Logo" class="h-10 w-auto">
        <span class="ml-2 text-2xl font-bold text-blue-600">Vocaldo</span>
    </div>
    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
        <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
        <a href="{{ route('srt.landing') }}" class="text-gray-600 hover:text-blue-600 transition">SRT Generator</a>
        <a href="{{ route('vtt.landing') }}" class="text-gray-600 hover:text-blue-600 transition">VTT Generator</a>
        <a href="#pricing" class="text-gray-600 hover:text-blue-600 transition">Pricing</a>
        <a href="/transcribe" class="text-gray-600 hover:text-blue-600 transition">Languages</a>
        <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Log In</a>
        <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition mt-2 md:mt-0">Get Started Free</a>
    </div>
</nav>
        </header>

        <main class="flex-grow">
<!-- Hero Section -->
<section class="gradient-bg text-white py-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full lg:w-1/2 lg:pr-12 mb-12 lg:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Transcribe Speech in Any Language with AI</h1>
                <p class="text-xl mb-8">Vocaldo uses cutting-edge AI to convert speech to text in over 100 languages. Save time and increase productivity with our accurate, fast, and easy-to-use transcription service.</p>
                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Start Transcribing for Free</a>
                    <a href="#demo" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">See Demo</a>
                </div>
                <div class="flex items-center mb-6">
                   
                </div>
                <div class="mt-4">
                    <a href="https://www.producthunt.com/posts/vocaldo-ai?embed=true&utm_source=badge-featured&utm_medium=badge&utm_souce=badge-vocaldo&#0045;ai" target="_blank" rel="noopener noreferrer">
                        <img src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=468566&theme=neutral" alt="Vocaldo&#0032;AI - Trabscribe&#0032;and&#0032;export&#0032;to&#0032;VTT&#0032;and&#0032;SRT&#0032;for&#0032;FREE | Product Hunt" style="width: 250px; height: 54px;" width="250" height="54" />
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-5/12">
                <div class="rounded-lg overflow-hidden shadow-2xl">
                <a href="{{ route('register') }}">
                        <img src="/img/head.png" alt="Vocaldo AI Transcription Demo" class="w-full h-auto object-cover" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Features -->
<section id="features" class="py-20">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">How Vocaldo Works</h2>
                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Upload</h3>
                            <p>Simply upload your audio or video file to our secure platform.</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Process</h3>
                            <p>Our AI analyzes and transcribes your content with high accuracy.</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-purple-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Translate</h3>
                            <p>Optionally translate your transcription into multiple languages.</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-yellow-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Download</h3>
                            <p>Get your accurate transcription in various formats (TXT, SRT, VTT).</p>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Transformation -->
            <section class="py-20 bg-blue-600 text-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">Experience the Vocaldo Difference</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold mb-4 text-blue-600">Where You Want to Be</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Effortlessly transcribe hours of content in minutes</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Achieve 95%+ accuracy in transcriptions</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span>Expand your reach with multi-language support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold mb-4 text-blue-600">The Benefits You'll Enjoy</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-blue-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span>Save countless hours and boost productivity</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 
                                    <svg class="w-6 h-6 text-blue-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span>Improve communication and reduce misunderstandings</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-blue-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span>Expand your global reach and impact</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            
            <section id="features" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Why Choose Vocaldo?</h2>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">🌍</div>
                <h3 class="text-xl font-semibold mb-2">Multi-Language Support</h3>
                <p>Transcribe audio in over 100 languages with high accuracy.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-semibold mb-2">Lightning-Fast Results</h3>
                <p>Get your transcriptions in minutes, not hours.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">💯</div>
                <h3 class="text-xl font-semibold mb-2">Unmatched Accuracy</h3>
                <p>AI-powered engine ensures reliable and precise transcripts.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">📝</div>
                <h3 class="text-xl font-semibold mb-2">Summary Generation</h3>
                <p>Get concise summaries of your transcribed content automatically.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">🔄</div>
                <h3 class="text-xl font-semibold mb-2">Translate to Any Language</h3>
                <p>Easily translate your transcriptions into multiple languages.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">📄</div>
                <h3 class="text-xl font-semibold mb-2">Multiple Formats</h3>
                <p>Download transcripts and translations in TXT, SRT, or VTT formats.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-semibold mb-2">Secure & Confidential</h3>
                <p>Your audio files and transcripts are always protected.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                <div class="text-blue-600 text-4xl mb-4">🆓</div>
                <h3 class="text-xl font-semibold mb-2">Free Tier Available</h3>
                <p>Start transcribing immediately with our feature-rich free plan.</p>
            </div>
        </div>
    </div>
</section>
            <section id="demo" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Experience Vocaldo's Precision in Action</h2>
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="mb-6">
                <audio controls class="w-full">
                    <source src="/img/demo.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-semibold mb-4">Sample Transcription:</h3>
                <div class="space-y-3 text-sm md:text-base">
                <p>    [00:00:00.000 - 00:00:05.000]  Welcome to Vocaldo, where we transform your audio into accurate text in any language.</p>
                <p>[00:00:06.000 - 00:00:10.000]  Our AI-powered platform is designed to make transcription effortless and precise.</p>
                <p>[00:00:11.000 - 00:00:15.000]  It's incredible how quick and accurate the transcription is,</p>
                <p>[00:00:15.000 - 00:00:20.000]  no matter the language. Can you tell us more about how Vocaldo works?</p>
                <p>[00:00:20.000 - 00:00:25.000]  Absolutely! Vocaldo uses state-of-the-art machine learning algorithms to analyze audio</p>
                <p>[00:00:25.000 - 00:00:31.000]  and convert it to text. Our system can handle multiple speakers, various accents,</p>
                <p>[00:00:31.000 - 00:00:34.000]  and even background noise with remarkable accuracy.</p>
                <p>[00:00:35.000 - 00:00:39.000]  That's impressive! What about different file formats and languages?</p>
                <p>[00:00:39.000 - 00:00:44.000]  Great question! Vocaldo supports a wide range of audio and video formats,</p>
<p>[00:00:44.000 - 00:00:51.000]  including MP3, WAV, MP4, and more. As for languages, we currently support</p>
<p>[00:00:52.000 - 00:00:57.000]  100 languages and dialects, making it perfect for global content creators and businesses.</p>
<p>[00:00:58.000 - 00:01:03.000]  Wow! That's versatile! How fast can users expect to get their transcriptions?</p>
<p>[00:01:03.000 - 00:01:08.000]  Speed is one of our key features. Most transcriptions are completed within minutes,</p>
<p>[00:01:08.000 - 00:01:15.000]  not hours. For example, a 60-minute audio file typically takes about 5 to 10 minutes to</p>
<p>[00:01:15.000 - 00:01:22.000]  transcribe, depending on the complexity. That's incredibly fast! What about accuracy and editing</p>
<p>[00:01:22.000 - 00:01:30.000]  options? Our accuracy rate is consistently above 95% for clear audio. Plus, we offer an intuitive</p>
<p>[00:01:30.000 - 00:01:36.000]  editor where users can easily review and refine their transcripts. You can adjust timings,</p>
<p>[00:01:36.000 - 00:01:40.000]  correct any misheard words, and even add speaker labels.</p>
<p>[00:01:40.000 - 00:01:46.000]  It sounds like Vocaldo has thought of everything. How can people get started?</p>
<p>[00:01:46.000 - 00:01:52.000]  It's simple. You can start using Vocaldo for free today. Just sign up on our website,</p>
<p>[00:01:52.000 - 00:01:57.000]  upload your first audio or video file, and experience the power of AI transcription yourself.</p>
<p>[00:01:58.000 - 00:02:04.000]  We offer 10 free transcriptions per month, with affordable plans for more frequent users.</p>





</div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 mb-8">
                <a href="/img/demo.srt" download class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition hover-scale text-center">
                    Download Sample SRT
                </a>
                <a href="/img/demo.vtt" download class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full transition hover-scale text-center">
                    Download Sample VTT
                </a>
            </div>
            <div class="text-center">
                <p class="text-lg mb-4">Ready to experience Vocaldo's powerful transcription for yourself?</p>
                <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition hover-scale inline-block">
                    Start Your Free Trial Now
                </a>
            </div>
        </div>
    </div>
</section>
            
            <!-- Sign-up options -->
            <div class="mt-8 text-center">
                <h3 class="text-2xl font-semibold mb-4">Ready to Get Started?</h3>
                <div class="flex flex-col items-center space-y-4">
                    <a href="{{ route('login.google') }}" class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 font-semibold py-2 px-4 rounded-full transition hover-scale flex items-center justify-center w-64">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z" fill="#4285F4"/>
                        </svg>
                        Sign up with Google
                    </a>
                    <span class="text-gray-500">or</span>
                    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition hover-scale w-64">
                        Sign up with Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

          
              <!-- Problem Agitation -->
              <section class="py-20 bg-gray-100">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">Tired of Wasting Time on Manual Transcription?</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold mb-4">The Struggle is Real</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-red-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Hours spent manually transcribing audio and video files</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-red-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Inaccurate transcriptions leading to misunderstandings</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-red-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Difficulty in handling multiple languages</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold mb-4">The Cost of Inaction</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-yellow-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    <span>Missed deadlines and opportunities due to slow transcription process</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-yellow-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    <span>Increased stress and frustration for you and your team</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-yellow-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    <span>Limited global reach due to language barriers</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

  <!-- Pricing Section -->
  <section id="pricing" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12">Simple, Transparent Pricing</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-lg hover-scale w-full md:w-80">
                        <h3 class="text-2xl font-bold mb-4">Free</h3>
                        <p class="text-4xl font-bold mb-6">$0<span class="text-lg font-normal">/forever</span></p>
                        <ul class="mb-8 space-y-2">
                            <li>✅ 10 transcriptions/day</li>
                            <li>✅ 120 minutes total length</li>
                            <li>✅ All language support</li>
                            <li>✅ Watermark</li>
                            <li>❌ Priority processing</li>
                        </ul>
                        <a href="{{ route('register') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition">Get Started</a>
                    </div>
                    <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg hover-scale w-full md:w-80 transform scale-105">
                        <h3 class="text-2xl font-bold mb-4">Unlimited</h3>
                        <p class="text-4xl font-bold mb-6">$29<span class="text-lg font-normal">/forever</span></p>
                        <ul class="mb-8 space-y-2">
                            <li>✅ Unlimited transcriptions</li>
                            <li>✅ Unlimited total length</li>
                            <li>✅ All language support</li>
                            <li>✅ Remove Vocaldo Watermark</li>
                            <li>✅ Priority processing</li>
                        </ul>
                        <a href="{{ route('register') }}" class="block text-center bg-white text-blue-600 hover:bg-blue-100 font-bold py-2 px-4 rounded-full transition">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </section>

 

            




        <section class="py-20 bg-blue-600 text-white">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Audio?</h2>
                    <p class="text-xl mb-8">Join thousands of satisfied users and start transcribing for free today!</p>
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Create Your Free Account</a>
                </div>
            </section>

 <!-- About Us -->
 <section class="py-20 bg-gray-100">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">About Vocaldo</h2>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg mb-6">Vocaldo was born out of frustration with existing transcription tools. As content creators ourselves, we wanted a faster, more accurate, and user-friendly solution for transcribing audio and video content.</p>
                        <p class="text-lg mb-6">Our team of AI experts and language enthusiasts worked tirelessly to develop a cutting-edge speech-to-text engine that delivers unparalleled accuracy across multiple languages.</p>
                        <p class="text-lg mb-6">Since our launch, Vocaldo has been featured in TechCrunch, Product Hunt, and AI News for our innovative approach to transcription. We're proud to have helped thousands of content creators, journalists, and businesses streamline their workflows and reach global audiences.</p>
                    </div>
                </div>
            </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">How accurate is the transcription?</h3>
                        <p>Our AI-powered engine provides industry-leading accuracy, typically achieving 95%+ accuracy for clear audio in supported languages.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">What file formats are supported?</h3>
                        <p>We support a wide range of audio and video formats, including MP3, WAV, MP4, and more. Check our documentation for a full list.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">How long does transcription take?</h3>
                        <p>Transcription time depends on the file length, but most files are processed within minutes. Unlimited plan users enjoy priority processing for faster results.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Is my data secure?</h3>
                        <p>Yes, we take data security seriously. All uploads are encrypted, and files are deleted from our servers after processing unless you choose to save them in your account.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-blue-600 text-white">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Transcription Workflow?</h2>
                    <p class="text-xl mb-8">Join thousands of satisfied users and start transcribing smarter, faster, and more accurately today!</p>
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Get Started for Free</a>
                    <p class="mt-4 text-sm">No credit card required. Start with 10 free transcriptions per day.</p>
                </div>
            </section>


        <!-- Voice Cloning Advertisement -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-3xl font-bold mb-6">Discover Verbatik Voice Cloning</h2>
                    <p class="text-xl mb-6">Take your audio experience to the next level with our cutting-edge voice cloning technology. Create natural-sounding synthetic voices for various applications.</p>
                    <a href="https://verbatik.com/voice-cloning" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition hover-scale">Learn More</a>
                </div>
            </div>
        </section>


        </main>

        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Vocaldo</h3>
                        <p>Revolutionizing speech-to-text with AI</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#features" class="hover:text-blue-400 transition">Features</a></li>
                            <li><a href="#how-it-works" class="hover:text-blue-400 transition">How It Works</a></li>
                            <li><a href="#pricing" class="hover:text-blue-400 transition">Pricing</a></li>
                            <li><a href="/transcribe" class="hover:text-blue-400 transition">Languages</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Legal</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-blue-400 transition">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-blue-400 transition">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Connect</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-blue-400 transition">Contact Us</a></li>
                            <li><a href="https://verbatik.com" class="hover:text-blue-400 transition">Visit Verbatik.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                    <p>&copy; 2024 Verbatik Technologies Limited. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>