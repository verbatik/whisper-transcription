<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-blue-800 leading-tight">
            {{ __('Create New Transcript') }}
        </h1>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Upload Your Audio or Video File</h2>
                    
                    @if(auth()->user()->canGenerateTranscription())
                        <form action="{{ route('audio_files.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                            @csrf
                            <div class="mb-6">
                                <label for="audio_file" class="block text-sm font-medium text-gray-700 mb-2">Select File</label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="audio_file" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                                <span>Upload a file</span>
                                                <input id="audio_file" name="audio_file" type="file" class="sr-only" required>
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">MP3, MP4, WAV up to 25MB</p>
                                    </div>
                                </div>
                                <div id="file-name" class="mt-2 text-sm text-gray-600"></div>
                            </div>
                            <div class="flex items-center justify-between mt-8">
                                <div class="text-sm">
                                    <a href="mailto:support@verbatik.com" class="font-medium text-blue-600 hover:text-blue-500">
                                        Need help?
                                    </a>
                                </div>
                                <button type="submit" id="submitButton" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg class="mr-2 -ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Upload and Transcribe
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        Your daily limit is exhausted. Please wait until tomorrow or upgrade to the unlimited version.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <a href="{{ route('upgrade') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Upgrade to Unlimited
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div id="loadingOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-75 hidden flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-xl text-center">
            <div class="animate-spin rounded-full h-16 w-16 border-t-2 border-b-2 border-blue-600 mx-auto"></div>
            <p class="mt-4 text-lg font-semibold text-gray-700">Processing your file...</p>
            <p class="mt-2 text-sm text-gray-500">This may take a few minutes depending on the file size.</p>
        </div>
    </div>

    @if(auth()->user()->canGenerateTranscription())
        <script>

    <script>
        const form = document.getElementById('uploadForm');
        const fileInput = document.getElementById('audio_file');
        const submitButton = document.getElementById('submitButton');
        const loadingOverlay = document.getElementById('loadingOverlay');
        const fileNameDisplay = document.getElementById('file-name');
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
            if (this.files[0]) {
                if (this.files[0].size > maxSize) {
                    alert('File size exceeds the limit of 25MB. Please choose a smaller file.');
                    this.value = ''; // Clear the file input
                    fileNameDisplay.textContent = '';
                } else {
                    fileNameDisplay.textContent = `Selected file: ${this.files[0].name}`;
                }
            } else {
                fileNameDisplay.textContent = '';
            }
        });

        // Drag and drop functionality
        const dropZone = document.querySelector('form > div');
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            dropZone.classList.add('border-blue-300', 'border-4');
        }

        function unhighlight(e) {
            dropZone.classList.remove('border-blue-300', 'border-4');
        }

        dropZone.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            fileInput.dispatchEvent(new Event('change'));
        }
    </script>
    @endif
</x-app-layout>