<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'file_name', 'file_path', 'transcription', 'srt_path', 'vtt_path',
        'summary', 'translation', 'translation_language', 'translated_srt_path', 'translated_vtt_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}