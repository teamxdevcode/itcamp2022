<?php

namespace App\Http\Livewire;

use App\Models\Registration;
use Brainstud\FileVault\Facades\FileVault;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class Register extends Component
{
    use WithFileUploads;

    public Registration $data;
    public $step = 1;
    public $educational_certificate_file = null;
    public $policy_confirmation = false;
    public $known_us_from = [];

    public $rules = [
        'data.name' => 'required',
        'data.surname' => 'required',
        'data.email' => 'required|email',
        'data.birthday' => 'required|date',
        'data.gender' => 'required|in:Male,Female,LGBTQ+',
        'data.blood_type' => 'required|in:A,B,AB,O',
        'data.religion' => 'required|in:Buddhism,Christianity,Islam,Other',
        'data.address' => 'required',
        'data.province' => 'required',
        'data.district' => 'required',
        'data.subdistrict' => 'required',
        'data.phone' => 'required|digits:10',
        'data.school' => 'required',
        'data.education_level' => 'required|in:M.4,M.5,M.6,HVC.,TC.',
        'data.educational_program' => 'required',
        'educational_certificate_file' => 'required|mimes:jpeg,png,pdf|max:1024',
        'data.congenital_disease' => 'required',
        'data.allergic_drug' => 'required',
        'data.allergen' => 'required',
        'data.shirt_size' => 'required',
        'known_us_from' => 'required',
        'data.emergency_name' => 'required',
        'data.emergency_surname' => 'required',
        'data.emergency_phone' => 'required|digits:10',
        'data.emergency_relationship' => 'required',
        'data.subcamp' => 'required|in:Webtopia,DataVergent,Game Runner,Nettapunk',
        'policy_confirmation' => 'required|boolean'
    ];

    public function mount() {
        $this->data = Auth::user()?->registration ?? new Registration();

        if ($this->data->applicant_id) {
          $this->policy_confirmation = true;
        }

        $this->known_us_from = (array)json_decode($this->data->known_us_from);
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function increment() {
        if ($this->step < 3) {
            $this->step++;
        }
    }

    public function decrement() {
      if ($this->step > 1) {
          $this->step--;
      }
    }

    public function submit() {

        $temp_file = Auth::user()->registration?->educational_certificate;

        if ($temp_file !== null) {
          $this->rules['educational_certificate_file'] = '';
        }

        $this->validate();

        if (!$this->policy_confirmation) {
            return $this->addError('policy_confirmation', 'กรุณารับทราบและยอมรับข้อตกลงทั้งหมด');
        }

        try {
            if ($this->educational_certificate_file !== null) {
                $this->educational_certificate_file->storeAs('educational-certificates', $this->educational_certificate_file->hashName());
                FileVault::encrypt("educational-certificates/{$this->educational_certificate_file->hashName()}");
            }

            Auth::user()->registration()->updateOrCreate(
              ['applicant_id' => Auth::id()],
              [
                  'name' => $this->data->name,
                  'surname' => $this->data->surname,
                  'email' => $this->data->email,
                  'birthday' => $this->data->birthday,
                  'gender' => $this->data->gender,
                  'blood_type' => $this->data->blood_type,
                  'religion' => $this->data->religion,
                  'address' => $this->data->address,
                  'province' => $this->data->province,
                  'district' => $this->data->district,
                  'subdistrict' => $this->data->subdistrict,
                  'phone' => $this->data->phone,
                  'school' => $this->data->school,
                  'education_level' => $this->data->education_level,
                  'educational_program' => $this->data->educational_program,
                  'educational_certificate' => is_null($this?->educational_certificate_file) ? Auth::user()->registration->educational_certificate : $this->educational_certificate_file->hashName().'.enc',
                  'congenital_disease' => $this->data->congenital_disease,
                  'allergic_drug' => $this->data->allergic_drug,
                  'allergen' => $this->data->allergen,
                  'shirt_size' => $this->data->shirt_size,
                  'known_us_from' => json_encode($this->known_us_from),
                  'emergency_name' => $this->data->emergency_name,
                  'emergency_surname' => $this->data->emergency_surname,
                  'emergency_phone' => $this->data->emergency_phone,
                  'emergency_relationship' => $this->data->emergency_relationship,
                  'subcamp' => $this->data->subcamp,
              ]
            );

            if ($this->educational_certificate_file !== null) {
              Storage::delete("educational-certificates/{$temp_file}");
            }

            $this->step = 4;
        } catch (Throwable $e) {
            $this->addError('submit', $e->getMessage());
            if ($this->educational_certificate_file !== null) {
              Storage::delete("educational-certificates/{$this->educational_certificate_file->hashName()}.enc");
            }
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
