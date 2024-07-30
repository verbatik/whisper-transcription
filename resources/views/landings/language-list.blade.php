<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multilingual Transcription Services | Vocaldo</title>
    <meta name="description" content="Vocaldo offers accurate AI-powered transcription services in multiple languages. Choose from our wide range of supported languages and start transcribing today!">
    <meta name="keywords" content="transcription, multilingual, AI-powered, audio to text, video to text">
    <link rel="canonical" href="{{ url('/transcribe') }}">
    <meta property="og:title" content="Multilingual Transcription Services | Vocaldo">
    <meta property="og:description" content="AI-powered transcription in multiple languages. Fast, accurate, and affordable.">
    <meta property="og:url" content="{{ url('/transcribe') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img/vocaldo-og-image.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Vocaldo Multilingual Transcription",
      "description": "AI-powered transcription services in multiple languages",
      "provider": {
        "@type": "Organization",
        "name": "Vocaldo",
        "url": "{{ url('/') }}"
      },
      "areaServed": "Worldwide",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Transcription Languages",
        "itemListElement": [
          @foreach($languages as $key => $name)
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "{{ $name }} Transcription"
            }
          }@if(!$loop->last),@endif
          @endforeach
        ]
      }
    }
    </script>
</head>
<body class="antialiased bg-gray-50 text-gray-800">


    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('img/logo.svg') }}" alt="Vocaldo Logo" class="h-10 w-auto mr-2">
                <span class="text-2xl font-bold text-blue-600">Vocaldo</span>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
                <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
                <a href="{{ route('srt.landing') }}" class="text-gray-600 hover:text-blue-600 transition">SRT Generator</a>
                <a href="{{ route('vtt.landing') }}" class="text-gray-600 hover:text-blue-600 transition">VTT Generator</a>
                <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition">How It Works</a>
                <a href="/transcribe" class="hover:text-blue-400 transition">Languages</a>

                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Log In</a>
                <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition mt-2 md:mt-0">Get Started Free</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="gradient-bg text-white py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full lg:w-1/2 lg:pr-12 mb-12 lg:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">Transcribe in Any Language with AI</h1>
                        <p class="text-xl mb-8">Choose from our wide range of supported languages and start transcribing your audio or video content with Vocaldo's cutting-edge AI technology.</p>
                        <div class="flex flex-wrap gap-4 mb-8">
                            <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Start Transcribing for Free</a>
                            <a href="#language-list" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Explore Languages</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12">
                        <div class="rounded-lg overflow-hidden shadow-2xl">
                            <img src="{{ asset('/img/head.png') }}" alt="Multilingual Transcription Illustration" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Language List Section -->
        <section id="language-list" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Supported Languages for Transcription</h2>
                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($languages as $key => $name)
                        <a href="{{ route('language.landing', $key) }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 hover-scale">
                            <h3 class="text-xl font-semibold mb-2 text-blue-600">{{ $name }}</h3>
                            <p class="text-gray-600">Accurate AI transcription for {{ $name }} audio and video</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Why Choose Vocaldo for Multilingual Transcription?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl mb-4">🌍</div>
                        <h3 class="text-xl font-semibold mb-2">Global Language Support</h3>
                        <p>Transcribe content in over 50 languages with high accuracy.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl mb-4">⚡</div>
                        <h3 class="text-xl font-semibold mb-2">Lightning-Fast Results</h3>
                        <p>Get your transcriptions in minutes, not hours.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl mb-4">💯</div>
                        <h3 class="text-xl font-semibold mb-2">Unmatched Accuracy</h3>
                        <p>AI-powered engine ensures reliable and precise transcripts across all languages.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">How Vocaldo Works</h2>
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Upload</h3>
                        <p>Upload your audio or video file in any supported language.</p>
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

        <!-- CTA Section -->
        <section class="py-20 bg-blue-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Ready to Transcribe in Any Language?</h2>
                <p class="text-xl mb-8">Join thousands of satisfied users and start transcribing for free today!</p>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Create Your Free Account</a>
                <p class="mt-4 text-sm">No credit card required. Start with 3 free transcriptions.</p>
            </div>
            </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">What Our Users Say</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mb-4">"Vocaldo has revolutionized our multilingual content production. The accuracy across different languages is impressive!"</p>
                        <p class="font-semibold">- Sarah J., Content Manager</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mb-4">"As a journalist, I need quick and accurate transcriptions. Vocaldo delivers on both fronts, saving me hours of work."</p>
                        <p class="font-semibold">- Mike T., Investigative Reporter</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mb-4">"The multi-language support is a game-changer for our international team. It's like having a translator and transcriber in one!"</p>
                        <p class="font-semibold">- Elena R., Project Coordinator</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">How accurate is the transcription across different languages?</h3>
                        <p>Our AI-powered engine provides industry-leading accuracy, typically achieving 95%+ accuracy for clear audio in all supported languages.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Can I transcribe audio with multiple speakers in different languages?</h3>
                        <p>Yes, Vocaldo can handle multi-speaker audio and can even differentiate between speakers in the transcript.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">How long does the transcription process take?</h3>
                        <p>Transcription time depends on the file length, but most files are processed within minutes. Unlimited plan users enjoy priority processing for faster results.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Is my data secure when I use Vocaldo for transcription?</h3>
                        <p>Yes, we take data security seriously. All uploads are encrypted, and files are deleted from our servers after processing unless you choose to save them in your account.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-blue-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Experience the Power of Multilingual Transcription</h2>
                <p class="text-xl mb-8">Join thousands of satisfied users and start transcribing smarter, faster, and more accurately today!</p>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Get Started for Free</a>
                <p class="mt-4 text-sm">No credit card required. Start with 3 free transcriptions in any language.</p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Vocaldo</h3>
                    <p>Revolutionizing multilingual transcription with AI</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#features" class="hover:text-blue-400 transition">Features</a></li>
                        <li><a href="/transcribe" class="hover:text-blue-400 transition">Languages</a></li>
                        <li><a href="#how-it-works" class="hover:text-blue-400 transition">How It Works</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('privacy.policy') }}" class="hover:text-blue-400 transition">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-blue-400 transition">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-400 transition">Contact Us</a></li>
                        <li><a href="https://twitter.com/vocaldo" class="hover:text-blue-400 transition">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/company/vocaldo" class="hover:text-blue-400 transition">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p>&copy; {{ date('Y') }} Vocaldo. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Add any additional scripts here -->
    <script>
        // Add any custom JavaScript for enhanced interactivity
    </script>
</body>
</html>