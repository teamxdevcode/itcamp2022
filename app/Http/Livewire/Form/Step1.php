<?php

namespace App\Http\Livewire\Form;

use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;

class Step1 extends Component
{
    use WithFileUploads;

    public Registration $regis;
    public $education_certificate;

    protected $rules = [
      'regis.name' => 'required',
      'regis.surname' => 'required',
      'regis.nickname' => 'required',
      'regis.gender' => 'required',
      'regis.birth' => 'required|date',
      'regis.blood_type' => 'required',
      'regis.phone' => 'required|digits:10',
      'regis.religion' => 'required',
      'regis.email' => 'required|email',
      'regis.address' => 'required',
      'regis.school' => 'required',
      'regis.education_level' => 'required',
      'regis.education_program' => 'required',
      'regis.education_certificate' => 'required',
    ];

    public function mount() {
      $this->regis = Auth::user()?->registration ?? new Registration();
    }

    public function save() {
      $this->validate();

      Auth::user()->registration()->updateOrCreate(
        ['user_id' => Auth::id()],
        [
          'current_step' => $this->regis?->current_page ?? 1,
          'name' => $this->regis->name,
          'surname' => $this->regis->surname,
          'nickname' => $this->regis->nickname,
          'gender' => $this->regis->gender,
          'birth' => $this->regis->birth,
          'blood_type' => $this->regis->blood_type,
          'phone' => $this->regis->phone,
          'religion' => $this->regis->religion,
          'email' => $this->regis->email,
          'address' => $this->regis->address,
          'school' => $this->regis->school,
          'education_level' => $this->regis->education_level,
          'education_program' => $this->regis->education_program,
          'education_certificate' => 'test_8FJaX5BGg8HnvXA1v7W3dKvFC4XnBlROR3g.png.enc',
        ]
      );

      return redirect()->route('registration.step2');
    }

    public function render()
    {
        return view('livewire.form.step1');
    }
}
