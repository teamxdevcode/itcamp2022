<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Applicant;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {
      $users = Applicant::all()->count();
      $applicants = Registration::all()->count();
      $answers = Answer::all()->count();
      return view('admin.dashboard', [
        'users'=>$users,
        'applicants'=>$applicants,
        'answers'=>$answers,
      ]);
    }

    public function signin() {
      return view('admin.signin');
    }

    public function signout() {
      Auth::guard('admin')->logout();
      return redirect()->route('admin.signout');
    }
}
