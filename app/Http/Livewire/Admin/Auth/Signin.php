<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Signin extends Component
{
    public $username, $password;

    protected $rules = [
      'username' => 'required',
      'password' => 'required',
    ];

    public function submit() {
        $this->validate();

        if(Auth::guard('admin')->attempt(['username'=>$this->username, 'password'=>$this->password])) {
          return redirect()->route('admin.dashboard');
        }

        $this->addError('failed', 'Username or Password is incorrect.');
    }

    public function render()
    {
        return view('livewire.admin.auth.signin');
    }
}
