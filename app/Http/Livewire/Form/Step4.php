<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Step4 extends Component
{
    public $type = '';

    public function mount()
    {
      return $this->type = 'data';
    }

    public function render()
    {
        return view('livewire.form.step4');
    }
}
