<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Vocaldo</title>
    <meta description="Create your Vocaldo account to start transcribing audio files, generating summaries, and translating content with AI-powered technology.">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #f0f4f8; }
        @media (min-width: 1024px) {
            .main-container { height: 100vh; }
        }
    </style>
</head>
<body class="font-sans">
    <div class="main-container flex flex-col lg:flex-row">
        <!-- Left side - App information and benefits -->
        <div class="w-full lg:w-1/2 p-8 bg-blue-600">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-white">Welcome to Vocaldo</h1>
                <p class="text-xl lg:text-2xl mb-8 text-white">Transform your speech into text with AI-powered transcription</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-lg">
                        <svg class="w-12 h-12 mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Accurate Transcription</h3>
                        <p class="text-gray-600">State-of-the-art AI ensures highly accurate speech-to-text conversion.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-lg">
                        <svg class="w-12 h-12 mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">SRT & VTT Formats</h3>
                        <p class="text-gray-600">Get your transcriptions in industry-standard SRT and VTT file formats.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-lg">
                        <svg class="w-12 h-12 mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Lightning Fast</h3>
                        <p class="text-gray-600">Experience rapid transcription powered by cutting-edge AI technology.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-lg">
                        <svg class="w-12 h-12 mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Secure & Private</h3>
                        <p class="text-gray-600">Your data is encrypted and protected with the highest security standards.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right side - Registration form -->
        <div class="w-full lg:w-1/2 bg-white p-8 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-8 text-center">Create your account</h2>
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="text" name="name" required autofocus autocomplete="name" />
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="email" name="email" required autocomplete="username" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input id="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex flex-col space-y-4">
                        <button type="submit" class="w-full justify-center py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            Register
                        </button>

                        <a href="{{ route('login.google') }}" class="w-full flex justify-center items-center py-3 bg-red-600 hover:bg-red-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z" fill="currentColor"/></svg>
                            Sign up with Google
                        </a>
                    </div>

                    <div class="text-center mt-6">
                        <a class="text-lg text-blue-600 hover:text-blue-800" href="{{ route('login') }}">
                            Already have an account? Log in
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>