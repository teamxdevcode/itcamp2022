<?php

namespace App\Http\Livewire\Form;

use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Step3 extends Component
{
    public Registration $regis;

    protected $rules = [
      'regis.subcamp' => 'required',
    ];

    public function mount() {
      $this->regis = Auth::user()?->registration ?? new Registration();
    }

    public function save() {
      $this->validate();


      Auth::user()->registration()->updateOrCreate(
        ['user_id' => Auth::id()],
        [
          'current_step' => $this->regis->current_page > 3 ? $this->regis->current_page : 3,
          'subcamp' => $this->regis->subcamp,
        ]
      );

      return redirect()->route('registration.step4');
    }

    public function render()
    {
        return view('livewire.form.step3');
    }
}
