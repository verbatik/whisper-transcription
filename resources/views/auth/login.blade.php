<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vocaldo</title>
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
        <!-- Left side - App information -->
        <div class="w-full lg:w-1/2 p-8 bg-blue-600">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-white">Welcome Back to Vocaldo</h1>
                <p class="text-xl lg:text-2xl mb-8 text-white">Log in to continue your AI-powered transcription journey</p>
                
                <div class="bg-white rounded-lg p-6 shadow-lg mb-6">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Why Choose Vocaldo?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">State-of-the-art AI for accurate transcriptions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Get results in SRT and VTT formats</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Lightning-fast processing</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Secure and private data handling</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right side - Login form -->
        <div class="w-full lg:w-1/2 bg-white p-8 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-8 text-center">Log in to your account</h2>
                
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" name="remember">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>

                    <div class="flex flex-col space-y-4">
                        <button type="submit" class="w-full justify-center py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            Log in
                        </button>

                        <a href="{{ route('login.google') }}" class="w-full flex justify-center items-center py-3 bg-red-600 hover:bg-red-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z" fill="currentColor"/></svg>
                            Sign in with Google
                        </a>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:text-blue-800" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                        <a class="text-sm text-blue-600 hover:text-blue-800" href="{{ route('register') }}">
                            Need an account? Register
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>