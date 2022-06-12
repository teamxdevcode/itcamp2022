<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class FacebookAuthController extends Controller
{
    public function redirect() {
      /* Redirect to Facebook for authentication. */
      return Socialite::driver('facebook')->setScopes(['email'])->redirect();
    }

    public function callback() {
      try {
        /* Retrieve useer information from Facebok */
        $facebookUser = Socialite::driver('facebook')->fields(['first_name', 'last_name', 'email', 'picture.width(400)'])->user();

        /*
          Create user if it's a new user.
          Update user information if user has already exists.
        */
        $user = Applicant::updateOrCreate([
          'facebook_id' => $facebookUser->id,
        ], [
          'first_name' => $facebookUser->user['first_name'],
          'last_name' => $facebookUser->user['last_name'],
          'email' => $facebookUser->user['email'] ?? null,
          'facebook_token' => $facebookUser->token,
        ]);

        /* Login */
        Auth::login($user);

        return redirect()->route('home');
      } catch(Throwable $e) {
        return response($e->getMessage(),400);
      }
    }

    public function logout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('index');
    }
}
