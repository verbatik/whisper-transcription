<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'is_subscriber',
        'daily_generations',
        'generations_reset_at',
        'stripe_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_subscriber' => 'boolean',
        'generations_reset_at' => 'datetime',
    ];

    public function audioFiles()
    {
        return $this->hasMany(AudioFile::class);
    }

    public function canGenerateTranscription()
    {
        if ($this->is_subscriber) {
            return true;
        }

        if ($this->generations_reset_at === null || now()->gt($this->generations_reset_at)) {
            $this->daily_generations = 0;
            $this->generations_reset_at = now()->addDay();
            $this->save();
        }

        return $this->daily_generations < 10;
    }

    public function incrementDailyGenerations()
    {
        if (!$this->is_subscriber) {
            $this->daily_generations++;
            $this->save();
        }
    }
}