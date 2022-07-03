<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Confirm extends Component
{
    public $user;
    public $waiverModal = false;

    public function mount() {
        $this->user = Auth::user();
    }

    public function showWaiverModal() {
        $this->waiverModal = true;
    }

    public function hideWaiverModal() {
        $this->waiverModal = false;
    }

    public function waiver() {
      $all_file = [];
        if (!is_null($this->user->registration->confirm)) {
            $all_file = [
                'transfer-statement/'.$this->user->registration->confirm->transfer_statement,
                'identity-card/'.$this->user->registration->confirm->identity_card,
                'vaccine-certificate/'.$this->user->registration->confirm->vaccine_certificate,
            ];
        }

        $this->user->registration->confirm()->updateOrCreate(
          ['applicant_id' => Auth::user()->registration->applicant_id],
          [
            'confirm' => 0,
            'nickname' => null,
            'transfer_statement' => null,
            'transfer_at' => null,
            'identity_card' => null,
            'vaccine_certificate' => null,
            'food_restrictions' => null,
          ]
        );

        Storage::delete($all_file);

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.confirm');
    }
}
