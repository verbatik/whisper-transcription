<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocaldo Chrome Extension - Transcribe Anywhere, Anytime</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(90deg, #4F46E5, #06B6D4); }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="/img/logo.svg" alt="Vocaldo Logo" class="h-10 w-auto">
                <span class="ml-2 text-2xl font-bold text-blue-600">Vocaldo</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#features" class="text-gray-600 hover:text-blue-600 transition">Features</a>
                <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition">How It Works</a>
                <a href="/login" class="text-blue-600 hover:text-blue-800 font-semibold">Log In</a>
                <a href="/register" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition">Get Started</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="gradient-bg text-white py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full lg:w-1/2 lg:pr-12 mb-12 lg:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">Transcribe Anywhere with Vocaldo Chrome Extension</h1>
                        <p class="text-xl mb-8">Convert speech to text directly from your browser. Fast, accurate, and seamless transcription for videos, podcasts, and more.</p>
                        <a href="https://chromewebstore.google.com/detail/vocaldo-transcribe/kjjfhfphcnkkiccjkidokolmeifpebeb?hl=en" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition inline-block">Add to Chrome - It's Free</a>
                    </div>
                    <div class="w-full lg:w-5/12">
                        <img src="/img/head.png" alt="Vocaldo Chrome Extension Demo" class="rounded-lg shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Powerful Features at Your Fingertips</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">One-Click Transcription</h3>
                        <p>Transcribe any audio or video content on the web with just one click.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Multi-Language Support</h3>
                        <p>Transcribe and translate content in over 100 languages.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Instant Subtitles</h3>
                        <p>Generate and overlay subtitles on videos in real-time.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">How It Works</h2>
                <div class="flex flex-wrap justify-center">
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="text-3xl font-bold text-blue-600 mb-4">1</div>
                            <h3 class="text-xl font-semibold mb-2">Install the Extension</h3>
                            <p>Add Vocaldo to your Chrome browser from the Chrome Web Store.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="text-3xl font-bold text-blue-600 mb-4">2</div>
                            <h3 class="text-xl font-semibold mb-2">Choose Your Content</h3>
                            <p>Navigate to any webpage with audio or video content you want to transcribe.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="text-3xl font-bold text-blue-600 mb-4">3</div>
                            <h3 class="text-xl font-semibold mb-2">Transcribe Instantly</h3>
                            <p>Click the Vocaldo icon and watch as your content is transcribed in seconds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-blue-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Ready to Transcribe with Ease?</h2>
                <p class="text-xl mb-8">Join thousands of users and start transcribing directly from your browser today!</p>
                <a href="https://chromewebstore.google.com/detail/vocaldo-transcribe/kjjfhfphcnkkiccjkidokolmeifpebeb?hl=en" class="bg-white text-blue-600 hover:bg-blue-100 font-bold py-3 px-8 rounded-full text-lg transition inline-block">Add Vocaldo to Chrome</a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <h3 class="text-lg font-semibold mb-4">Vocaldo</h3>
                    <p>Revolutionizing speech-to-text with AI</p>
                </div>
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#features" class="hover:text-blue-400 transition">Features</a></li>
                        <li><a href="#how-it-works" class="hover:text-blue-400 transition">How It Works</a></li>
                        <li><a href="https://www.vocaldo.com/#pricing" class="hover:text-blue-400 transition">Pricing</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 mb-8 md:mb-0">
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="https://www.vocaldo.com/privacy-policy" class="hover:text-blue-400 transition">Privacy Policy</a></li>
                        <li><a href="https://www.vocaldo.com/terms" class="hover:text-blue-400 transition">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4">
                    <h3 class="text-lg font-semibold mb-4">Connect</h3>
                    <ul class="space-y-2">
                        <li><a href="https://www.vocaldo.com/#" class="hover:text-blue-400 transition">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p>&copy; 2024 Vocaldo. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>