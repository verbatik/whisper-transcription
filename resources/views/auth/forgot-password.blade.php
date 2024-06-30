<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Vocaldo</title>
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
                <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-white">Password Reset</h1>
                <p class="text-xl lg:text-2xl mb-8 text-white">Securely reset your Vocaldo account password</p>
                
                <div class="bg-white rounded-lg p-6 shadow-lg mb-6">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Why Choose Vocaldo?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">AI-powered speech-to-text conversion</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">SRT and VTT format support</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Fast and accurate transcriptions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Secure and private data handling</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right side - Password reset form -->
        <div class="w-full lg:w-1/2 bg-white p-8 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6 text-center">Reset Your Password</h2>
                
                <div class="mb-6 text-sm text-gray-600">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="email" name="email" value="{{ old('email') }}" required autofocus />
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="w-full justify-center py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            Email Password Reset Link
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:text-blue-800">
                        Back to Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>