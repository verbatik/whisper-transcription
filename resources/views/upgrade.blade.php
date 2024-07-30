<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-blue-800 dark:text-blue-200 leading-tight">
            {{ __('Unlock Unlimited Transcriptions') }}
        </h2>
    </x-slot>

    @section('title', 'Vocaldo - Upgrade Now')

    <div class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
               <!-- Launch Discount Banner -->
               <div class="bg-yellow-400 dark:bg-yellow-600 text-black dark:text-white p-4 rounded-lg text-center mb-8">
                <p class="font-bold text-xl">🚀 Launch Discount: 30% OFF for Early Birds!</p>
                <p>Use coupon code BIRDS30 at checkout to save big!</p>
            </div>
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-xl rounded-lg">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">Choose Your Plan</h3>
                        <p class="text-xl text-gray-600 dark:text-gray-300">Transform your workflow with unlimited transcriptions.</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-blue-50 dark:bg-blue-900 p-6 rounded-lg">
                            <h4 class="text-xl font-semibold text-blue-800 dark:text-blue-200 mb-3">Monthly Subscription</h4>
                            <ul class="space-y-2 mb-4 text-gray-700 dark:text-gray-300">
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Unlimited transcriptions
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    No daily limits
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Priority processing
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    24/7 customer support
                                </li>
                            </ul>
                            <p class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">$5/month</p>
                            <form action="{{ route('stripe.create-checkout-session') }}" method="POST">
                                @csrf
                                <input type="hidden" name="plan" value="monthly">
                                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                    Subscribe Monthly
                                </button>
                            </form>
                        </div>
                        <div class="bg-blue-50 dark:bg-blue-900 p-6 rounded-lg">
                            <h4 class="text-xl font-semibold text-blue-800 dark:text-blue-200 mb-3">Lifetime Access</h4>
                            <ul class="space-y-2 mb-4 text-gray-700 dark:text-gray-300">
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    All features of Monthly plan
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    One-time payment
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    Lifetime access
                                </li>
                            </ul>
                            <p class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">$29 one-time</p>
                            <form action="{{ route('stripe.create-checkout-session') }}" method="POST">
                                @csrf
                                <input type="hidden" name="plan" value="lifetime">
                                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                                    Get Lifetime Access
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Secure payment processed by Stripe. 30-day money-back guarantee for monthly plan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>