<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Audio History') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-blue-600">Your Audio Files</h3>
                        <a href="{{ route('audio_files.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105">
                            <i class="fas fa-plus mr-2"></i> Upload New Audio
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($audioFiles as $audioFile)
                        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-music text-blue-500 text-2xl mr-3"></i>
                                <h4 class="text-lg font-semibold text-gray-800 truncate">{{ $audioFile->file_name }}</h4>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">Uploaded: {{ $audioFile->created_at->format('M d, Y') }}</p>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('audio_files.show', $audioFile) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    <i class="fas fa-play mr-1"></i> Play
                                </a>
                                <div>
                                    <button class="text-gray-600 hover:text-blue-600 mr-2" title="Download">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="text-gray-600 hover:text-red-600" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8">
                        {{ $audioFiles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Add a hook for infinite scrolling
        let page = 1;
        window.addEventListener('scroll', () => {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
                loadMoreAudioFiles();
            }
        });

        function loadMoreAudioFiles() {
            page++;
            fetch(`/audio-files?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    // Append new audio files to the grid
                    const gridContainer = document.querySelector('.grid');
                    data.forEach(audioFile => {
                        // Create and append new audio file elements
                    });
                });
        }
    </script>
    @endpush
</x-app-layout>