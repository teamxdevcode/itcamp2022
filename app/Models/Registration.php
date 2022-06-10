<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    public $primaryKey = 'user_id';

    protected $fillable = [
      'user_id',
      'current_step',
      'name',
      'surname',
      'nickname',
      'birth',
      'gender',
      'blood_type',
      'religion',
      'address',
      // 'province',
      // 'district',
      // 'subdistrict',
      'phone',
      'email',
      'education_level',
      'school',
      'education_program',
      'education_certificate',
      'has_congenital_disease',
      'congenital_disease_detail',
      'has_food_allergic',
      'food_allergic_detail',
      'has_drug_allergic',
      'drug_allergic_detail',
      'shirt_size',
      'known_from',
      'activities_detail',
      'emergency_contact_name',
      'emergency_contact_surname',
      'emergency_contact_phone',
      'emergency_contact_relationship',
      'subcamp',
    ];
}
