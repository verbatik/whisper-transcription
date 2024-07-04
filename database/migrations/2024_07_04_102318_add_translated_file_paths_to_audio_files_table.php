<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('audio_files', function (Blueprint $table) {
            $table->string('translated_srt_path')->nullable();
            $table->string('translated_vtt_path')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('audio_files', function (Blueprint $table) {
            $table->dropColumn(['translated_srt_path', 'translated_vtt_path']);
        });
    }
};
