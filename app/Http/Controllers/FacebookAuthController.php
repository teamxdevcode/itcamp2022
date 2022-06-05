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
      return Socialite::driver('facebook')->setScopes(['email'])->redirect();
    }

    public function callback() {
      try {
        $facebookUser = Socialite::driver('facebook')->fields(['first_name', 'last_name', 'email', 'picture.width(400)'])->user();
      } catch(Throwable $e) {
        return redirect()->route('welcome')->withErrors(['login_failed' => 'Login failed']);
      }
      $user = User::updateOrCreate([
        'facebook_id' => $facebookUser->id,
      ], [
        'first_name' => $facebookUser->user['first_name'],
        'last_name' => $facebookUser->user['last_name'],
        'email' => $facebookUser->user['email'] ?? null,
        'facebook_token' => $facebookUser->token,
      ]);
      Auth::login($user);
      return redirect()->route('home');
    }

    public function logout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('welcome');
    }
}
