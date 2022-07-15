<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    use HasFactory;

    protected $primaryKey = 'applicant_id';

    protected $fillable = ['applicant_id','confirm', 'nickname', 'transfer_statement','transfer_at','identity_card','vaccine_certificate','food_restrictions'];

    public function registration() {
      return $this->hasOne(Registration::class, 'applicant_id');
    }
}
