<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Audio File Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ $audioFile->file_name }}</h3>
                    
                    <div class="mb-4">
                        <h4 class="text-md font-semibold">Transcription:</h4>
                        <pre class="mt-2 p-4 bg-gray-100 rounded whitespace-pre-wrap">{{ $audioFile->transcription }}</pre>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-md font-semibold">Download Transcription Files:</h4>
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