<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class FacebookAuthController extends Controller
{
    public function redirect() {
      return Socialite::driver('facebook')->setScopes(['email', 'user_birthday', 'user_gender'])->redirect();
    }

    public function callback() {
      try {
        $facebookUser = Socialite::driver('facebook')->fields(['first_name', 'last_name', 'email', 'birthday', 'gender', 'picture.width(400)'])->user();
      } catch(Throwable $e) {
        return redirect()->route('welcome')->withErrors(['login_failed' => 'Login failed']);
      }
      $user = User::updateOrCreate([
        'facebook_id' => $facebookUser->id,
      ], [
        'first_name' => $facebookUser->user['first_name'],
        'last_name' => $facebookUser->user['last_name'],
        'email' => (isset($facebookUser->user['email'])) ? $facebookUser->user['email'] : null,
        'birthday' => (isset($facebookUser->user['birthday'])) ? date("Y-m-d", strtotime($facebookUser->user['birthday'])) : null,
        'gender' => (isset($facebookUser->user['gender'])) ? $facebookUser->user['gender'] : null,
        'facebook_token' => $facebookUser->token,
      ]);
      // return dd($facebookUser);
      Auth::login($user);
      return redirect()->route('home');
    }

    public function logout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('welcome');
    }

    public function user() {
      return dd(Socialite::driver('facebook')->userFromToken('EAAIFjzcC3tEBAJ4DUJSJpxvFZCBZB9W6LsNbL9Mw78H5T7yCWolvqQsGDsFsiV8nTWAKjt7AzJVw53e6A7yTuneU5EgzRiFOPJINLZBrZCTDNrDAd2ZBksFSmoO6UOBK4GIK645ufRTRUfuNB9xdok98njSyEGalMcgqMTcmYaHVsAEgojs6ZAE8Q7ZCUIQmHrmyP4DlUH6EhZAjFW3T1AmPwOTiSzxMFmlRT48ntzOCiVkmwFJ5lcpKHyG91VdoocUZD'));
    }
}
