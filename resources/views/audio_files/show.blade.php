<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Audio File Details') }}
        </h2>
    </x-slot>

    @section('title', 'Vocaldo - Audio File Details')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ $audioFile->file_name }}</h3>
                    
                    <div class="mb-4">
                        <h4 class="text-md font-semibold">Transcription:</h4>
                        <pre class="mt-2 p-4 bg-gray-100 rounded whitespace-pre-wrap">{{ $audioFile->transcription }}</pre>
                    </div>

                    @if($audioFile->summary)
                        <div class="mb-4">
                            <h4 class="text-md font-semibold">Summary:</h4>
                            <p class="mt-2 p-4 bg-gray-100 rounded">{{ $audioFile->summary }}</p>
                        </div>
                    @else
                        <div class="mb-4">
                            <form action="{{ route('audio_files.generate-summary', $audioFile) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Generate Summary
                                </button>
                            </form>
                        </div>
                    @endif

                    @if($audioFile->translation)
                        <div class="mb-4">
                            <h4 class="text-md font-semibold">Translation ({{ $audioFile->translation_language }}):</h4>
                            <pre class="mt-2 p-4 bg-gray-100 rounded whitespace-pre-wrap">{{ $audioFile->translation }}</pre>
                        </div>
                        <div class="mb-4">
                            <h4 class="text-md font-semibold">Download Translated Files:</h4>
                            <div class="mt-2">
                                <a href="{{ Storage::url($audioFile->translated_srt_path) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2" download>
                                    Download Translated SRT
                                </a>
                                <a href="{{ Storage::url($audioFile->translated_vtt_path) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" download>
                                    Download Translated VTT
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="mb-4">
                            <form action="{{ route('audio_files.translate', $audioFile) }}" method="POST" class="flex items-center">
                                @csrf
                                <select name="target_language" class="form-select mr-2">
                                    <option value="Spanish">Spanish</option>
                                    <option value="French">French</option>
                                    <option value="German">German</option>
                                    <option value="Italian">Italian</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Chinese">Chinese</option>
                                </select>
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Translate
                                </button>
                            </form>
                        </div>
                    @endif

                    <div class="mb-4">
                        <h4 class="text-md font-semibold">Download Original Transcription Files:</h4>
                        <div class="mt-2">
                            <a href="{{ Storage::url($audioFile->srt_path) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2" download>
                                Download SRT
                            </a>
                            <a href="{{ Storage::url($audioFile->vtt_path) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" download>
                                Download VTT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>