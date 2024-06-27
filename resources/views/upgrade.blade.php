<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upgrade to Unlimited Transcriptions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Upgrade to Unlimited Transcriptions for just $10!</h3>
                    <p class="mb-4">Enjoy unlimited transcriptions without any daily limits.</p>
                    <form action="{{ route('stripe.create-checkout-session') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Upgrade Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>