<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index() {
      return view('index');
    }

    public function home() {
      return view('home');
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
