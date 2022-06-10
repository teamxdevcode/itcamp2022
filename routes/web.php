<?php

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

Route::get('/', function () {
	return view('welcome');
})->name('welcome');


Route::group([], function() {
  Route::get('/home', function () {
    return view('home');
  })->name('home');

  Route::controller(RegistrationController::class)->prefix('registration')->name('registration.')->group(function() {
    Route::get('/step1', 'registerPage1')->name('step1');
    Route::get('/step2', 'registerPage2')->name('step2');
    Route::get('/step3', 'registerPage3')->name('step3');
    Route::get('/step4', 'registerPage4')->name('step4');
    Route::get('/step5', 'registerPage5')->name('step5');
    Route::get('/camp-selection', 'campSelectionPage')->name('campSelection');
    Route::get('/camp-question', 'campQuestionPage')->name('campQuestion');
  });

  // Example of how to decrypt and return encryption files from disk.
  Route::get('/education-certificate', function() {
    /* Check whether a user has an education certificate file or not. */
    if (!$filename = Auth::user()->registration?->education_certificate) {
      return abort(404);
    }

    /* If a user has the file, so decrypt and return it. */
    return response()->stream(function () use ($filename) {
      FileVault::streamDecrypt("education_certificates/{$filename}");
    }, 200, ["Content-Type" => "image/png"]);
  });
});

Route::controller(FacebookAuthController::class)->prefix('auth')->name('auth.')->group(function() {
  Route::get('/redirect', 'redirect')->name('redirect');
  Route::get('/callback', 'callback')->name('callback');
  Route::get('/logout', 'logout')->name('logout');
  Route::get('/user', 'user')->name('user');
});

