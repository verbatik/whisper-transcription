<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Transcript') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('audio_files.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                        @csrf
                        <div class="mb-4">
                            <label for="audio_file" class="block text-sm font-medium text-gray-700">Audio/Video File</label>
                            <input type="file" name="audio_file" id="audio_file" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" id="submitButton" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Upload and Transcribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add this at the end of the body -->
    <div id="loadingOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <div class="animate-spin rounded-full h-32 w-32 border-b-2 border-gray-900"></div>
            <p class="mt-4 text-lg font-semibold">Processing your file...</p>
        </div>
    </div>

    <script>
        const form = document.getElementById('uploadForm');
        const fileInput = document.getElementById('audio_file');
        const submitButton = document.getElementById('submitButton');
        const loadingOverlay = document.getElementById('loadingOverlay');
        const maxSize = 25 * 1024 * 1024; // 25MB in bytes

        form.addEventListener('submit', function(e) {
            if (fileInput.files[0].size > maxSize) {
                e.preventDefault();
                alert('File size exceeds the limit of 25MB. Please choose a smaller file.');
            } else {
                submitButton.disabled = true;
                loadingOverlay.classList.remove('hidden');
            }
        });

        fileInput.addEventListener('change', function() {
            if (this.files[0].size > maxSize) {
                alert('File size exceeds the limit of 25MB. Please choose a smaller file.');
                this.value = ''; // Clear the file input
            }
        });
    </script>
</x-app-layout>