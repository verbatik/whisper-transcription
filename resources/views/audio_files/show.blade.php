<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Audio File Details') }}
        </h2>
    </x-slot>

    @section('title', 'Vocaldo - Audio File Details')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">{{ $audioFile->file_name }}</h3>
                    
                    <div class="mb-4">
                        <h4 class="text-md font-semibold text-gray-800 dark:text-gray-200">Transcription:</h4>
                        <pre class="mt-2 p-4 bg-gray-100 dark:bg-gray-700 rounded whitespace-pre-wrap text-gray-800 dark:text-gray-200">{{ $audioFile->transcription }}</pre>
                    </div>

                    @if($audioFile->summary)
                        <div class="mb-4">
                            <h4 class="text-md font-semibold text-gray-800 dark:text-gray-200">Summary:</h4>
                            <p class="mt-2 p-4 bg-gray-100 dark:bg-gray-700 rounded text-gray-800 dark:text-gray-200">{{ $audioFile->summary }}</p>
                        </div>
                    @else
                        <div class="mb-4">
                            <form action="{{ route('audio_files.generate-summary', $audioFile) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 dark:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                                    Generate Summary
                                </button>
                            </form>
                        </div>
                    @endif

                    @if($audioFile->translation)
                        <div class="mb-4">
                            <h4 class="text-md font-semibold text-gray-800 dark:text-gray-200">Translation ({{ $audioFile->translation_language }}):</h4>
                            <pre class="mt-2 p-4 bg-gray-100 dark:bg-gray-700 rounded whitespace-pre-wrap text-gray-800 dark:text-gray-200">{{ $audioFile->translation }}</pre>
                        </div>
                        <div class="mb-4">
                            <h4 class="text-md font-semibold text-gray-800 dark:text-gray-200">Download Translated Files:</h4>
                            <div class="mt-2">
                                <a href="{{ Storage::url($audioFile->translated_srt_path) }}" class="bg-blue-500 hover:bg-blue-700 dark:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2" download>
                                    Download Translated SRT
                                </a>
                                <a href="{{ Storage::url($audioFile->translated_vtt_path) }}" class="bg-green-500 hover:bg-green-700 dark:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded" download>
                                    Download Translated VTT
                                </a>
                            </div>
                        </div>
                    @else
                    <div class="mb-4">
    <form action="{{ route('audio_files.translate', $audioFile) }}" method="POST" class="flex items-center">
        @csrf
        <select name="target_language" class="form-select mr-2 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 border-gray-300 dark:border-gray-600 focus:border-blue-500 focus:ring-blue-500">
            <option value="Afrikaans">Afrikaans</option>
            <option value="Albanian">Albanian</option>
            <option value="Arabic">Arabic</option>
            <option value="Armenian">Armenian</option>
            <option value="Azerbaijani">Azerbaijani</option>
            <option value="Basque">Basque</option>
            <option value="Belarusian">Belarusian</option>
            <option value="Bengali">Bengali</option>
            <option value="Bosnian">Bosnian</option>
            <option value="Bulgarian">Bulgarian</option>
            <option value="Catalan">Catalan</option>
            <option value="Cebuano">Cebuano</option>
            <option value="Chinese (Simplified)">Chinese (Simplified)</option>
            <option value="Chinese (Traditional)">Chinese (Traditional)</option>
            <option value="Croatian">Croatian</option>
            <option value="Czech">Czech</option>
            <option value="Danish">Danish</option>
            <option value="Dutch">Dutch</option>
            <option value="English">English</option>
            <option value="Esperanto">Esperanto</option>
            <option value="Estonian">Estonian</option>
            <option value="Filipino">Filipino</option>
            <option value="Finnish">Finnish</option>
            <option value="French">French</option>
            <option value="Galician">Galician</option>
            <option value="Georgian">Georgian</option>
            <option value="German">German</option>
            <option value="Greek">Greek</option>
            <option value="Gujarati">Gujarati</option>
            <option value="Haitian Creole">Haitian Creole</option>
            <option value="Hausa">Hausa</option>
            <option value="Hebrew">Hebrew</option>
            <option value="Hindi">Hindi</option>
            <option value="Hungarian">Hungarian</option>
            <option value="Icelandic">Icelandic</option>
            <option value="Indonesian">Indonesian</option>
            <option value="Irish">Irish</option>
            <option value="Italian">Italian</option>
            <option value="Japanese">Japanese</option>
            <option value="Javanese">Javanese</option>
            <option value="Kannada">Kannada</option>
            <option value="Kazakh">Kazakh</option>
            <option value="Korean">Korean</option>
            <option value="Latin">Latin</option>
            <option value="Latvian">Latvian</option>
            <option value="Lithuanian">Lithuanian</option>
            <option value="Macedonian">Macedonian</option>
            <option value="Malay">Malay</option>
            <option value="Malayalam">Malayalam</option>
            <option value="Maltese">Maltese</option>
            <option value="Maori">Maori</option>
            <option value="Marathi">Marathi</option>
            <option value="Mongolian">Mongolian</option>
            <option value="Nepali">Nepali</option>
            <option value="Norwegian">Norwegian</option>
            <option value="Persian">Persian</option>
            <option value="Polish">Polish</option>
            <option value="Portuguese">Portuguese</option>
            <option value="Punjabi">Punjabi</option>
            <option value="Romanian">Romanian</option>
            <option value="Russian">Russian</option>
            <option value="Serbian">Serbian</option>
            <option value="Slovak">Slovak</option>
            <option value="Slovenian">Slovenian</option>
            <option value="Somali">Somali</option>
            <option value="Spanish">Spanish</option>
            <option value="Swahili">Swahili</option>
            <option value="Swedish">Swedish</option>
            <option value="Tamil">Tamil</option>
            <option value="Telugu">Telugu</option>
            <option value="Thai">Thai</option>
            <option value="Turkish">Turkish</option>
            <option value="Ukrainian">Ukrainian</option>
            <option value="Urdu">Urdu</option>
            <option value="Uzbek">Uzbek</option>
            <option value="Vietnamese">Vietnamese</option>
            <option value="Welsh">Welsh</option>
            <option value="Yiddish">Yiddish</option>
            <option value="Yoruba">Yoruba</option>
            <option value="Zulu">Zulu</option>
        </select>
        <button type="submit" class="bg-green-500 hover:bg-green-700 dark:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
            Translate
        </button>
    </form>
</div>
                    @endif

                    <div class="mb-4">
                        <h4 class="text-md font-semibold text-gray-800 dark:text-gray-200">Download Original Transcription Files:</h4>
                        <div class="mt-2">
                            <a href="{{ Storage::url($audioFile->srt_path) }}" class="bg-blue-500 hover:bg-blue-700 dark:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2" download>
                                Download SRT
                            </a>
                            <a href="{{ Storage::url($audioFile->vtt_path) }}" class="bg-green-500 hover:bg-green-700 dark:bg-green-600 dark:hover:bg-green-800 text-white font-bold py-2 px-4 rounded" download>
                                Download VTT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>