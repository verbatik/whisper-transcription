<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-blue-800 leading-tight">
            {{ __('Unlock Unlimited Transcriptions') }}
        </h2>
    </x-slot>

    @section('title', 'Vocaldo - Upgrade Now')

    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Upgrade to Unlimited for Just $29!</h3>
                        <p class="text-xl text-gray-600">Transform your workflow with unlimited transcriptions.</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h4 class="text-xl font-semibold text-blue-800 mb-3">What You Get:</h4>
                            <ul class="space-y-2">
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
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">Why Upgrade?</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span>Boost productivity with unlimited access</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span>Remove Vocaldo Watermark</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Save time with faster processing</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                    <span>Ensure data security and confidentiality</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="text-2xl font-bold text-gray-800 mb-6">One-time payment of just $29 for lifetime access!</p>
                        <form action="{{ route('stripe.create-checkout-session') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="max-w-xs mx-auto">
                                <label for="promo_code" class="block text-sm font-medium text-gray-700">Have a promo code? <br> Apply at Checkout</label>
                            </div>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                Upgrade Now and Unlock Unlimited Transcriptions
                            </button>
                        </form>
                        <p class="mt-4 text-sm text-gray-600">Secure payment processed by Stripe. 3-day money-back guarantee.</p>
                    </div>

                    <!-- Social Proof 
                    <div class="mt-12">
                        <h4 class="text-xl font-semibold text-center mb-4">Trusted by Industry Leaders</h4>
                        <div class="flex justify-center space-x-8">
                            <img src="{{ asset('img/company-logo-1.png') }}" alt="Company 1" class="h-8">
                            <img src="{{ asset('img/company-logo-2.png') }}" alt="Company 2" class="h-8">
                            <img src="{{ asset('img/company-logo-3.png') }}" alt="Company 3" class="h-8">
                        </div>
                    </div> -->

                    <!-- Testimonial 
                    <div class="mt-12 bg-gray-50 p-6 rounded-lg">
                        <p class="text-lg italic text-gray-700">"Vocaldo's unlimited plan has revolutionized our workflow. We've increased our productivity by 300% since upgrading!"</p>
                        <p class="mt-2 font-semibold">- John Doe, CEO of TechCorp</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>