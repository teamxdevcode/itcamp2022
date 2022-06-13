<?php

namespace App\Http\Controllers;

use Brainstud\FileVault\Facades\FileVault;
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

    public function educationalCertificateFile() {
      /* Check whether a user has an education certificate file or not. */
      if (!$filename = Auth::user()->registration?->educational_certificate) {
        return abort(404);
      }

      $contentType = [
        'pdf' => 'application/pdf',
        'png' => 'image/png',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'jpe' => 'image/jpeg',
      ];
      $ext = strtolower(pathinfo(substr("educational-certificates/{$filename}", 0, -4), PATHINFO_EXTENSION));

      /* If a user has the file, so decrypt and return it. */
      return response()->stream(function () use ($filename) {
        FileVault::streamDecrypt("educational-certificates/{$filename}");
      }, 200, ["Content-Type" => $contentType[$ext]]);
    }
}
