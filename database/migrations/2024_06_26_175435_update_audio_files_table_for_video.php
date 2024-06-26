<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAudioFilesTableForVideo extends Migration
{
    public function up()
    {
        Schema::table('audio_files', function (Blueprint $table) {
            if (!Schema::hasColumn('audio_files', 'file_type')) {
                $table->string('file_type')->after('file_path')->default('audio');
            }
        });
    }

    public function down()
    {
        Schema::table('audio_files', function (Blueprint $table) {
            if (Schema::hasColumn('audio_files', 'file_type')) {
                $table->dropColumn('file_type');
            }
        });
    }
}