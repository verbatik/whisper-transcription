<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transcription History') }}
        </h2>
    </x-slot>

    @section('title', 'Vocaldo - History')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <a href="{{ route('audio_files.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create New Transcript
                        </a>
                    </div>

                    @if($audioFiles->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($audioFiles as $audioFile)
                                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                                    <h3 class="text-lg font-semibold mb-2 text-blue-600">{{ $audioFile->title ?? 'Untitled' }}</h3>
                                    <p class="text-sm text-gray-600 mb-2">Uploaded: {{ $audioFile->created_at->format('Y-m-d H:i:s') }}</p>
                                    <p class="text-sm text-gray-700 mb-4 truncate">
                                        {{ substr($audioFile->transcription, 0, 100) }}{{ strlen($audioFile->transcription) > 100 ? '...' : '' }}
                                    </p>
                                    <a href="{{ route('audio_files.show', $audioFile) }}" class="text-blue-500 hover:text-blue-700 font-medium">
                                        View Details
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-6">
                            {{ $audioFiles->links() }}
                        </div>
                    @else
                        <p>No transcriptions found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>