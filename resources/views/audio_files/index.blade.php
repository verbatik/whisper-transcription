<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transcription History') }}
        </h2>
    </x-slot>

    @section('title', 'Vocaldo - History')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="mb-4">
                        <a href="{{ route('audio_files.create') }}" class="bg-blue-500 hover:bg-blue-700 dark:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                            Create New Transcript
                        </a>
                    </div>

                    @if($audioFiles->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($audioFiles as $audioFile)
                                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                                    <h3 class="text-lg font-semibold mb-2 text-blue-600 dark:text-blue-400">{{ $audioFile->title ?? 'Untitled' }}</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Uploaded: {{ $audioFile->created_at->format('Y-m-d H:i:s') }}</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 mb-4 truncate">
                                        {{ substr($audioFile->transcription, 0, 100) }}{{ strlen($audioFile->transcription) > 100 ? '...' : '' }}
                                    </p>
                                    <a href="{{ route('audio_files.show', $audioFile) }}" class="text-blue-500 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium">
                                        View Details
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-6">
                            {{ $audioFiles->links() }}
                        </div>
                    @else
                        <p class="text-gray-700 dark:text-gray-300">No transcriptions found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>