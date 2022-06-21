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
      $applicants_per_subcamp = Registration::groupBy('subcamp')->selectRaw('subcamp, count(applicant_id) as total')->get();
      $answers_per_subcamp = Answer::groupBy('subcamp')->selectRaw('subcamp, count(applicant_id) as total')->get();

      $chart['applicants'] = [];
      $chart['answers'] = [];

      foreach ($applicants_per_subcamp as $row) {
        $chart['applicants'][$row['subcamp']] = $row['total'];
      }

      foreach ($answers_per_subcamp as $row) {
        $chart['answers'][$row['subcamp']] = $row['total'];
      }

      return view('admin.dashboard', [
        'users'=>$users,
        'applicants'=>$applicants,
        'answers'=>$answers,
        'chart'=>$chart,
      ]);
    }

    public function registrations() {
      return view('admin.registrations');
    }

    public function signin() {
      return view('admin.signin');
    }

    public function signout() {
      Auth::guard('admin')->logout();
      return redirect()->route('admin.signout');
    }
}
