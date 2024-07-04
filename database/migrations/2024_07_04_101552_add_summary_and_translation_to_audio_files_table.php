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
            $table->text('summary')->nullable();
            $table->text('translation')->nullable();
            $table->string('translation_language')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('audio_files', function (Blueprint $table) {
            $table->dropColumn(['summary', 'translation', 'translation_language']);
        });
    }
};
