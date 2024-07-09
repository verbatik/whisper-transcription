<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $languageName }} Transcription Services | Vocaldo</title>
    <meta name="description" content="Accurate AI-powered {{ $languageName }} transcription services by Vocaldo. Convert {{ $languageName }} audio and video to text quickly and affordably.">
    <meta name="keywords" content="{{ $languageName }} transcription, AI transcription, audio to text, video to text">
    <link rel="canonical" href="{{ url("/transcribe-$language") }}">
    <meta property="og:title" content="{{ $languageName }} Transcription Services | Vocaldo">
    <meta property="og:description" content="Fast, accurate {{ $languageName }} transcription powered by AI. Convert your {{ $languageName }} audio and video to text with Vocaldo.">
    <meta property="og:url" content="{{ url("/transcribe-$language") }}">
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
      "name": "Vocaldo {{ $languageName }} Transcription",
      "description": "AI-powered {{ $languageName }} transcription service",
      "provider": {
        "@type": "Organization",
        "name": "Vocaldo",
        "url": "{{ url('/') }}"
      },
      "serviceType": "{{ $languageName }} Transcription",
      "areaServed": "Worldwide"
    }
    </script>
</head>
<body class="antialiased bg-gray-50 text-gray-800">
    <!-- Launch Discount Banner -->
    <div class="bg-yellow-400 text-black py-2 text-center">
        <p class="font-bold">🚀 Launch Discount: 30% OFF for {{ $languageName }} Transcription! Use coupon code BIRDS30 at checkout.</p>
    </div>

    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <img src="{{ asset('img/logo.svg') }}" alt="Vocaldo Logo" class="h-10 w-auto mr-2">
                <span class="text-2xl font-bold text-blue-600">Vocaldo</span>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
                <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
                <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition">How It Works</a>
                <a href="#pricing" class="text-gray-600 hover:text-blue-600 transition">Pricing</a>
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
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $languageName }} Transcription Made Easy with AI</h1>
                        <p class="text-xl mb-8">Convert your {{ $languageName }} audio and video to text with high accuracy using Vocaldo's cutting-edge AI technology.</p>
                        <div class="flex flex-wrap gap-4 mb-8">
                            <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Start {{ $languageName }} Transcription</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12">
                        <div class="rounded-lg overflow-hidden shadow-2xl">
                            <img src="{{ asset("img/head.png") }}" alt="{{ $languageName }} Transcription Illustration" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Why Choose Vocaldo for {{ $languageName }} Transcription?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                        <div class="text-blue-600 text-4xl mb-4">🎯</div>
                        <h3 class="text-xl font-semibold mb-2">High {{ $languageName }} Accuracy</h3>
                        <p>Our AI is specifically trained on {{ $languageName }} speech patterns and accents.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                        <div class="text-blue-600 text-4xl mb-4">⚡</div>
                        <h3 class="text-xl font-semibold mb-2">Fast {{ $languageName }} Transcription</h3>
                        <p>Get your {{ $languageName }} transcripts in minutes, not hours.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                        <div class="text-blue-600 text-4xl mb-4">💼</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $languageName }} Business Terms</h3>
                        <p>Accurate transcription of {{ $languageName }} industry-specific terminology.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">How {{ $languageName }} Transcription Works</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl mb-4">1</div>
                        <h3 class="text-xl font-semibold mb-2">Upload</h3>
                        <p>Upload your {{ $languageName }} audio or video file to our secure platform.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl mb-4">2</div>
                        <h3 class="text-xl font-semibold mb-2">Transcribe</h3>
                        <p>Our AI quickly transcribes your {{ $languageName }} content with high accuracy.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl mb-4">3</div>
                        <h3 class="text-xl font-semibold mb-2">Download</h3>
                        <p>Get your {{ $languageName }} transcript in various formats (TXT, SRT, VTT).</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">{{ $languageName }} Transcription Pricing</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-lg hover-scale w-full md:w-80">
                        <h3 class="text-2xl font-bold mb-4">Free Trial</h3>
                        <p class="text-4xl font-bold mb-6">$0<span class="text-lg font-normal">/10 minutes</span></p>
                        <ul class="mb-8 space-y-2">
                            <li>✅ 10 minutes of {{ $languageName }} transcription</li>
                            <li>✅ Basic {{ $languageName }} language model</li>
                            <li>✅ Standard processing speed</li>
                            <li>❌ Advanced {{ $languageName }} features</li>
                        </ul>
                        <a href="{{ route('register') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition">Start Free Trial</a>
                    </div>
                    <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg hover-scale w-full md:w-80 transform scale-105">
                        <h3 class="text-2xl font-bold mb-4">Unlimited {{ $languageName }}</h3>
                        <p class="text-4xl font-bold mb-6">$29<span class="text-lg font-normal">/month</span></p>
                        <ul class="mb-8 space-y-2">
                            <li>✅ Unlimited {{ $languageName }} transcription</li>
                            <li>✅ Advanced {{ $languageName }} language model</li>
                            <li>✅ Priority processing</li>
                            <li>✅ All {{ $languageName }} features included</li>
                        </ul>
                        <a href="{{ route('register') }}" class="block text-center bg-white text-blue-600 hover:bg-blue-100 font-bold py-2 px-4 rounded-full transition">Choose Unlimited</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- CTA Section -->
        <section class="py-20 bg-blue-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Ready to Transcribe Your {{ $languageName }} Content?</h2>
                <p class="text-xl mb-8">Join thousands of satisfied users and start transcribing {{ $languageName }} for free today!</p>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full
                text-lg transition hover-scale inline-block">Start {{ $languageName }} Transcription for Free</a>
                <p class="mt-4 text-sm">No credit card required. Start with 10 minutes of free {{ $languageName }} transcription.</p>
            </div>
        </section>

        <!-- Use Cases Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">{{ $languageName }} Transcription Use Cases</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                        <div class="text-blue-600 text-4xl mb-4">🎓</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $languageName }} Education</h3>
                        <p>Transcribe {{ $languageName }} lectures, seminars, and educational content for improved accessibility and study materials.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                        <div class="text-blue-600 text-4xl mb-4">📰</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $languageName }} Media</h3>
                        <p>Convert {{ $languageName }} interviews, podcasts, and broadcasts into text for easier editing and content repurposing.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                        <div class="text-blue-600 text-4xl mb-4">💼</div>
                        <h3 class="text-xl font-semibold mb-2">{{ $languageName }} Business</h3>
                        <p>Transcribe {{ $languageName }} meetings, conference calls, and presentations for better record-keeping and team collaboration.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions about {{ $languageName }} Transcription</h2>
                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">How accurate is the {{ $languageName }} transcription?</h3>
                        <p>Our AI-powered engine typically achieves 95%+ accuracy for clear {{ $languageName }} audio, with even higher accuracy for professional recordings.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Can Vocaldo handle different {{ $languageName }} accents and dialects?</h3>
                        <p>Yes, our AI model is trained on a wide variety of {{ $languageName }} accents and regional dialects to ensure high accuracy across different speakers.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">How long does {{ $languageName }} transcription take?</h3>
                        <p>Most {{ $languageName }} files are transcribed within minutes. The exact time depends on the file length and current system load.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Is my {{ $languageName }} content secure with Vocaldo?</h3>
                        <p>Absolutely. We use bank-level encryption for all uploads and delete files from our servers after processing unless you choose to save them in your account.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-blue-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Transform Your {{ $languageName }} Audio and Video to Text</h2>
                <p class="text-xl mb-8">Experience the power of AI-driven {{ $languageName }} transcription with Vocaldo.</p>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Start Your Free {{ $languageName }} Transcription</a>
                <p class="mt-4 text-sm">No credit card required. Begin with 10 minutes of free {{ $languageName }} transcription today.</p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Vocaldo</h3>
                    <p>Revolutionizing {{ $languageName }} transcription with AI</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#features" class="hover:text-blue-400 transition">{{ $languageName }} Features</a></li>
                        <li><a href="#how-it-works" class="hover:text-blue-400 transition">How It Works</a></li>
                        <li><a href="#pricing" class="hover:text-blue-400 transition">{{ $languageName }} Pricing</a></li>
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