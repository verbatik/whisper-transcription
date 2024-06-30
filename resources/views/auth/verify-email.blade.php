<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - Vocaldo</title>
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
        <!-- Left side - Verification information -->
        <div class="w-full lg:w-1/2 p-8 bg-blue-600">
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-white">Verify Your Email</h1>
                <p class="text-xl lg:text-2xl mb-8 text-white">One last step to access your Vocaldo account</p>
                
                <div class="bg-white rounded-lg p-6 shadow-lg mb-6">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Why Verify Your Email?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Ensures the security of your account</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Allows us to send you important notifications</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700">Helps prevent unauthorized access to your Vocaldo account</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right side - Verification actions -->
        <div class="w-full lg:w-1/2 bg-white p-8 flex flex-col justify-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6 text-center">Email Verification</h2>
                
                <div class="mb-6 text-sm text-gray-600">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        A new verification link has been sent to the email address you provided during registration.
                    </div>
                @endif

                <div class="mt-4 space-y-4">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="w-full justify-center py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            Resend Verification Email
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out text-lg">
                            Log Out
                        </button>
                    </form>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Need help? <a href="#" class="text-blue-600 hover:text-blue-800">Contact support</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
