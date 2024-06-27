<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verbatik STT - Revolutionary Speech-to-Text in Any Language</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(90deg, #4F46E5, #06B6D4); }
        .hover-scale { transition: transform 0.3s; }
        .hover-scale:hover { transform: scale(1.05); }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-800">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow-sm">
            <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="/path-to-your-logo.svg" alt="Verbatik STT Logo" class="h-10 w-auto">
                    <span class="ml-2 text-2xl font-bold text-blue-600">Verbatik STT</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
                    <a href="{{ route('srt.landing') }}" class="text-gray-600 hover:text-blue-600 transition">SRT Generator</a>
                    <a href="{{ route('vtt.landing') }}" class="text-gray-600 hover:text-blue-600 transition">VTT Generator</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition">How It Works</a>
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Log In</a>
                 
                    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition">Get Started Free</a>
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            <section class="gradient-bg text-white py-20">
                <div class="container mx-auto px-4 text-center">
                    <h1 class="text-5xl font-bold mb-6">Transcribe Speech in Any Language</h1>
                    <p class="text-xl mb-8">Harness the power of AI for accurate, fast, and free speech-to-text conversion in over 100 languages!</p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale">Start Transcribing for Free</a>
                        <a href="#demo" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-full text-lg transition hover-scale">See Demo</a>
                    </div>
                </div>
            </section>

            <section id="features" class="py-20 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl font-bold text-center mb-12">Why Choose Verbatik STT?</h2>
                    <div class="grid md:grid-cols-3 gap-8">
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
                            <div class="text-blue-600 text-4xl mb-4">🆓</div>
                            <h3 class="text-xl font-semibold mb-2">Free to Use</h3>
                            <p>Start transcribing immediately with our free tier.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                            <div class="text-blue-600 text-4xl mb-4">📄</div>
                            <h3 class="text-xl font-semibold mb-2">Multiple Formats</h3>
                            <p>Download transcripts in TXT, SRT, or VTT formats.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover-scale">
                            <div class="text-blue-600 text-4xl mb-4">🔒</div>
                            <h3 class="text-xl font-semibold mb-2">Secure & Confidential</h3>
                            <p>Your audio files and transcripts are always protected.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="demo" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">See Verbatik STT in Action</h2>
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="mb-6">
                <audio controls class="w-full">
                    <source src="/path/to/sample-audio.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg mb-6">
                <h3 class="text-lg font-semibold mb-2">Sample Transcription:</h3>
                <p class="mb-2">[00:00:00] Speaker 1: Welcome to Verbatik STT, where we transform your audio into accurate text in any language.</p>
                <p class="mb-2">[00:00:05] Speaker 2: It's incredible how quick and precise the transcription is, no matter the language!</p>
                <p>[00:00:10] Speaker 1: Absolutely! And you can start using it for free today.</p>
            </div>
            <div class="flex justify-center space-x-4 mb-8">
                <a href="/path/to/sample.srt" download class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition hover-scale">
                    Download Sample SRT
                </a>
                <a href="/path/to/sample.vtt" download class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full transition hover-scale">
                    Download Sample VTT
                </a>
            </div>
            
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

            <section id="how-it-works" class="py-20 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl font-bold text-center mb-12">How It Works</h2>
                    <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-12">
                        <div class="text-center">
                            <div class="bg-blue-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">1. Upload</h3>
                            <p>Upload your audio or video file</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-green-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">2. Process</h3>
                            <p>Our AI transcribes the content</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-purple-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">3. Download</h3>
                            <p>Get your transcript instantly</p>
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
                            <li>❌ Priority processing</li>
                        </ul>
                        <a href="{{ route('register') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition">Get Started</a>
                    </div>
                    <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg hover-scale w-full md:w-80 transform scale-105">
                        <h3 class="text-2xl font-bold mb-4">Unlimited</h3>
                        <p class="text-4xl font-bold mb-6">$59<span class="text-lg font-normal">/forever</span></p>
                        <ul class="mb-8 space-y-2">
                            <li>✅ Unlimited transcriptions</li>
                            <li>✅ Unlimited total length</li>
                            <li>✅ All language support</li>
                            <li>✅ Priority processing</li>
                        </ul>
                        <a href="{{ route('register') }}" class="block text-center bg-white text-blue-600 hover:bg-blue-100 font-bold py-2 px-4 rounded-full transition">Upgrade Now</a>
                    </div>
                </div>
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


        <section class="py-20 bg-blue-600 text-white">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Audio?</h2>
                    <p class="text-xl mb-8">Join thousands of satisfied users and start transcribing for free today!</p>
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition hover-scale inline-block">Create Your Free Account</a>
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



        </main>

        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Verbatik STT</h3>
                        <p>Revolutionizing speech-to-text with AI</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#features" class="hover:text-blue-400 transition">Features</a></li>
                            <li><a href="#how-it-works" class="hover:text-blue-400 transition">How It Works</a></li>
                            <li><a href="#" class="hover:text-blue-400 transition">Pricing</a></li>
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
                    <p>&copy; 2024 Verbatik. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>