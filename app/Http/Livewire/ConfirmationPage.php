<?php

namespace App\Http\Livewire;

use App\Models\Confirm;
use Brainstud\FileVault\Facades\FileVault;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class ConfirmationPage extends Component
{
    use WithFileUploads;

    public Confirm $confirm;
    public $transfer_statement;
    public $identity_card;
    public $vaccine_certificate;
    public $food_restrictions = [];

    public $rules = [
        'confirm.nickname' => 'required',
        'transfer_statement' => 'required|max:1024|mimes:jpeg,png',
        'confirm.transfer_at' => 'required|date',
        'identity_card' => 'required|max:1024|mimes:jpeg,png',
        'vaccine_certificate' => 'required|max:1024|mimes:jpeg,png',
        'food_restrictions' => '',
    ];

    public function mount() {
        $this->confirm = new Confirm();
    }

    public function submit() {
      $this->validate();
      $this->confirm->transfer_statement = $this->transfer_statement->hashName().'.enc';
      $this->confirm->identity_card = $this->identity_card->hashName().'.enc';
      $this->confirm->vaccine_certificate = $this->vaccine_certificate->hashName().'.enc';
      $this->confirm->food_restrictions = json_encode($this->food_restrictions, JSON_UNESCAPED_UNICODE );

      $this->confirm->applicant_id = Auth::user()->registration->applicant_id;
      $this->confirm->confirm = 1;

      try {
        $this->confirm->save();
        $this->transfer_statement->storeAs('transfer-statement', $this->transfer_statement->hashName());
        $this->identity_card->storeAs('identity-card', $this->identity_card->hashName());
        $this->vaccine_certificate->storeAs('vaccine-certificate', $this->vaccine_certificate->hashName());

        FileVault::encrypt("transfer-statement/{$this->transfer_statement->hashName()}");
        FileVault::encrypt("identity-card/{$this->identity_card->hashName()}");
        FileVault::encrypt("vaccine-certificate/{$this->vaccine_certificate->hashName()}");
        return redirect()->route('home');
      } catch (Throwable $e) {
        dd($e, $this->confirm);
      }
    }

    public function render()
    {
        return view('livewire.confirmation-page');
    }
}
