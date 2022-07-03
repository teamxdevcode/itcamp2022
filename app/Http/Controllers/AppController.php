<?php

namespace App\Http\Controllers;

use Brainstud\FileVault\Facades\FileVault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function home() {
      if (Auth::check()) {
        if (strtotime(date('Y-m-d H:m:s')) >= strtotime("2022-06-28 12:00:00")) {
          return view('v2.result');
        }
        return view('v2.home');
      }
      return view('v2.index');
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

    public function confirmation() {
        if (strtotime(date('Y-m-d H:m:s')) > strtotime('2022-07-01 23:59:59') && !in_array(Auth::user()->id, [168, 1687, 383, 1618, 1314])) {
            return redirect()->route('home');
        }
        if (Auth::user()->registration != null && (Auth::user()->registration->result == 1 || in_array(Auth::user()->id, [168, 1687, 383, 1618, 1314])) && is_null(Auth::user()->registration->confirm)) {
          return view('v2.confirmation');
        }
        return abort(403);
    }
}
