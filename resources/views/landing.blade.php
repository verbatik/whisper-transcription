<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verbatik STT - Free Speech-to-Text Transcription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-600 text-white py-4">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div>
                    <h1 class="text-4xl font-bold">Verbatik STT</h1>
                    <p class="mt-2 text-xl">Free Speech-to-Text Transcription</p>
                </div>
                <a href="https://verbatik.com" class="text-white hover:text-blue-200 transition duration-300">
                    Powered by Verbatik.com
                </a>
            </div>
        </header>

        <main class="flex-grow container mx-auto px-4 py-8">
            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-4">Transform Your Audio into Text, Absolutely Free!</h2>
                <p class="text-xl mb-6">Verbatik STT harnesses the power of cutting-edge AI to provide accurate, fast, and free speech-to-text transcription. Experience the quality of Verbatik technology at no cost!</p>
                <div class="mt-8">
                    <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg text-lg inline-block transition duration-300">Start Transcribing for Free</a>
                    <a href="{{ route('login') }}" class="ml-4 text-blue-600 hover:text-blue-800 font-semibold text-lg">Already have an account? Log in</a>
                    <a href="{{ route('login.google') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg text-lg inline-block transition duration-300">Sign In/Up with Google</a>
                
                </div>
            </section>

            <section class="mb-12 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">See Verbatik STT in Action</h2>
                <div class="mb-4">
                    <audio controls class="w-full">
                        <source src="/path/to/sample-audio.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Sample Transcription:</h3>
                    <p class="mb-2">[00:00:00] Speaker 1: Welcome to Verbatik STT, where we transform your audio into accurate text.</p>
                    <p class="mb-2">[00:00:05] Speaker 2: It's amazing how quick and precise the transcription is!</p>
                    <p>[00:00:10] Speaker 1: Absolutely! And the best part? It's completely free to use.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="/path/to/sample.srt" download class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block transition duration-300">
                        Download Sample SRT
                    </a>
                    <a href="/path/to/sample.vtt" download class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-block transition duration-300">
                        Download Sample VTT
                    </a>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-6">Why Choose Verbatik STT?</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">100% Free</h3>
                        <p>Experience professional-grade transcription without spending a dime, powered by Verbatik technology.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Unmatched Accuracy</h3>
                        <p>Our AI-powered engine delivers industry-leading accuracy, ensuring your transcripts are reliable and precise.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Lightning-Fast Results</h3>
                        <p>Get your transcriptions in minutes, not hours. Verbatik STT works at the speed of thought.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Multiple Output Formats</h3>
                        <p>Download your transcripts in plain text, SRT, or VTT formats to suit all your needs.</p>
                    </div>
                </div>
            </section>

            <section class="mb-12 bg-blue-50 p-8 rounded-lg">
                <h2 class="text-3xl font-semibold mb-4">Discover the Full Power of Verbatik</h2>
                <p class="text-xl mb-6">Love Verbatik STT? Explore our premium Text-to-Speech service at Verbatik.com for even more advanced features and capabilities.</p>
                <a href="https://verbatik.com" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg inline-block transition duration-300">Learn More About Verbatik TTS</a>
            </section>

            <section class="mb-12">
                <h2 class="text-3xl font-semibold mb-6">How It Works</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">1. Upload</h3>
                        <p>Simply upload your audio file to our secure platform.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">2. Process</h3>
                        <p>Our AI quickly transcribes your audio with high accuracy.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">3. Download</h3>
                        <p>Get your transcript in your preferred format instantly.</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-3xl font-semibold mb-6">Start Transcribing Today</h2>
                <p class="text-xl mb-6">Join thousands of satisfied users who have discovered the power of free, accurate transcription with Verbatik STT. Whether you're transcribing interviews, lectures, podcasts, or any other audio content, we've got you covered.</p>
                <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg text-lg inline-block transition duration-300 mr-4">Create Your Free Account Now</a>
                <a href="https://verbatik.com" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg inline-block transition duration-300">Explore Verbatik TTS</a>
            </section>
        </main>

        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <p>&copy; 2024 Verbatik. All rights reserved.</p>
                    <div>
                        <a href="#" class="hover:underline mr-4">Privacy Policy</a>
                        <a href="#" class="hover:underline mr-4">Terms of Service</a>
                        <a href="https://verbatik.com" class="hover:underline">Visit Verbatik.com</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>