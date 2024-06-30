<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password - Vocaldo</title>
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
        <!-- Left side - Security information -->
        <div class="w-full lg:w-1/2 p-8 bg-blue-600">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-white">Secure Area</h1>
                <p class="text-xl lg:text-2xl mb-8 text-white">Protecting your Vocaldo account and data</p>
                
                <div class="bg-white rounded-lg p-6 shadow-lg mb-6">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Why We Confirm Your Password</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Ensures it's really you accessing sensitive information</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Protects your account from unauthorized access</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Adds an extra layer of security to your Vocaldo experience</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right side - Password confirmation form -->
        <div class="w-full lg:w-1/2 bg-white p-8 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6 text-center">Confirm Your Password</h2>
                
                <div class="mb-6 text-sm text-gray-600">
                    This is a secure area of the application. Please confirm your password before continuing.
                </div>

                <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                    @csrf

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Confirm
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