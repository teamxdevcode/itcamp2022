<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registerPage() {
      return view('register');
    }

    public function registerPage1() {
      return view('form.step1');
    }
    public function registerPage2() {
      return view('form.step2');
    }
    public function registerPage3() {
      return view('form.step3');
    }
    public function registerPage4() {
      return view('form.step4');
    }

    public function campSelectionPage() {}

    public function campQuestionPage() {}
}
