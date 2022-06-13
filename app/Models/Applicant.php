<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Applicant extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'facebook_id',
        'facebook_token',
        'first_name',
        'last_name',
    ];

    public function registration() {
        return $this->hasOne(Registration::class);
    }

    public function answer() {
        return $this->hasOne(Answer::class);
    }
}
