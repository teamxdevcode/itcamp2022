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

    public function generalData() {}

    public function extraData() {}

    public function answer() {}
}
