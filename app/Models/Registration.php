<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'name',
      'surname',
      'nickname',
      'birth',
      'gender',
      'blood_type',
      'religion',
      'address',
      'province',
      'district',
      'subdistrict',
      'phone',
      'email',
      'education_level',
      'school',
      'education_program',
      'education_certificate',
      'has_congenital_disease',
      'congenital_disease_detail',
      'has_allergic',
      'allergic_detail',
      'shirt_size',
      'activities_detail',
      'emergency_contact_name',
      'emergency_contact_surname',
      'emergency_contact_phone',
      'emergency_contact_relationship',
    ];
}
