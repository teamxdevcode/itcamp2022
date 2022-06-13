<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function home() {
      if (Auth::check()) {
          return view('home');
      }
      return view('index');
    }

    public function register() {
      return view('register');
    }

    public function question() {
      if (!Auth::user()?->registration) {
        return redirect()->route('home');
      }
      return view('question');
    }
}
