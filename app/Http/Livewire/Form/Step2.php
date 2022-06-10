<?php

namespace App\Http\Livewire\Form;

use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Step2 extends Component
{
  public Registration $regis;
  public $known_from = [];

  protected $rules = [
    'regis.has_congenital_disease' => 'required',
    'regis.congenital_disease_detail' => '',
    'regis.has_food_allergic' => 'required',
    'regis.food_allergic_detail' => '',
    'regis.has_drug_allergic' => 'required',
    'regis.drug_allergic_detail' => '',
    'regis.shirt_size' => 'required',
    'regis.known_from' => 'required',
    'regis.activities_detail' => 'required',
    'regis.emergency_contact_name' => 'required',
    'regis.emergency_contact_surname' => 'required',
    'regis.emergency_contact_phone' => 'required|digits:10',
    'regis.emergency_contact_relationship' => 'required',
  ];

  public function mount() {
    $this->regis = Auth::user()?->registration ?? new Registration();
    $this->known_from = json_decode($this->regis?->known_from ?? '[]');
  }

  public function save() {
    $this->regis->known_from = $this->known_from;

    $this->validate();


    Auth::user()->registration()->updateOrCreate(
      ['user_id' => Auth::id()],
      [
        'current_step' => $this->regis->current_page > 2 ? $this->regis->current_page : 2,
        'has_congenital_disease' => $this->regis->has_congenital_disease,
        'congenital_disease_detail' => $this->regis->congenital_disease_detail,
        'has_food_allergic' => $this->regis->has_food_allergic,
        'food_allergic_detail' => $this->regis->food_allergic_detail,
        'has_drug_allergic' => $this->regis->has_drug_allergic,
        'drug_allergic_detail' => $this->regis->drug_allergic_detail,
        'shirt_size' => $this->regis->shirt_size,
        'known_from' => $this->regis->known_from,
        'activities_detail' => $this->regis->activities_detail,
        'emergency_contact_name' => $this->regis->emergency_contact_name,
        'emergency_contact_surname' => $this->regis->emergency_contact_surname,
        'emergency_contact_phone' => $this->regis->emergency_contact_phone,
        'emergency_contact_relationship' => $this->regis->emergency_contact_relationship,
      ]
    );

    return redirect()->route('registration.step3');
  }
    public function render()
    {
        return view('livewire.form.step2');
    }
}
