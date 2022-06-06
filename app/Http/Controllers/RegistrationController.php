<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registerPage() {
      return view('register');
    }

    public function campSelectionPage() {}

    public function campQuestionPage() {}
}
