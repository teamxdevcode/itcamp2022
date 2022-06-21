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
      try {
          return Socialite::driver('facebook')->setScopes(['email'])->redirect();
      } catch (Throwable $e) {
          return redirect()->route('home');
      }
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
        if (config('app.env') === 'local') {
            return dd($e->getMessage());
        }

        return redirect()->route('home');
      }
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect()->route('home');
    }
}
