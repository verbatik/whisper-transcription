<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Audio/Video File') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('audio_files.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                        @csrf
                        <div class="mb-4">
                            <label for="audio_file" class="block text-sm font-medium text-gray-700">Audio/Video File (max 25MB)</label>
                            <input type="file" name="audio_file" id="audio_file" accept="audio/*,video/*" class="mt-1 block w-full" required>
                            <p class="mt-2 text-sm text-gray-500" id="fileInfo"></p>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Upload and Transcribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('audio_file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const fileInfo = document.getElementById('fileInfo');
            const maxSize = 25 * 1024 * 1024; // 25MB in bytes

            if (file) {
                if (file.size > maxSize) {
                    fileInfo.textContent = 'File is too large. Maximum size is 25MB.';
                    fileInfo.style.color = 'red';
                    e.target.value = ''; // Clear the file input
                } else {
                    fileInfo.textContent = `File name: ${file.name}, Size: ${(file.size / (1024 * 1024)).toFixed(2)} MB`;
                    fileInfo.style.color = 'green';
                }
            } else {
                fileInfo.textContent = '';
            }
        });

        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            const fileInput = document.getElementById('audio_file');
            const maxSize = 25 * 1024 * 1024; // 25MB in bytes

            if (fileInput.files.length > 0 && fileInput.files[0].size > maxSize) {
                e.preventDefault();
                alert('File is too large. Maximum size is 25MB.');
            }
        });
    </script>
</x-app-layout>