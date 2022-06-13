<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\RegistrationController;
use Brainstud\FileVault\Facades\FileVault;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(FacebookAuthController::class)->prefix('auth')->name('auth.')->group(function() {
  Route::get('/redirect', 'redirect')->middleware('guest')->name('login');
  Route::get('/callback', 'callback')->middleware('guest')->name('callback');
  Route::get('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(AppController::class)->group(function() {
  Route::get('/', 'home')->name('home');
  Route::middleware('auth')->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::get('/question', 'question')->name('question');
    Route::get('/register/education-certificate', function() {
      /* Check whether a user has an education certificate file or not. */
      if (!$filename = Auth::user()->registration?->educational_certificate) {
        return abort(404);
      }

      /* If a user has the file, so decrypt and return it. */
      return response()->stream(function () use ($filename) {
        FileVault::streamDecrypt("educational-certificates/{$filename}");
      }, 200, ["Content-Type" => "image/png"]);
    });
  });
});
