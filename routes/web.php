<?php

use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth'])->group(function() {
  Route::get('/home', function () {
    return view('home');
  })->name('home');

  Route::controller(RegistrationController::class)->prefix('registration')->name('registration.')->group(function() {
    Route::get('/register', 'registerPage')->name('register');
    Route::get('/camp-selection', 'campSelectionPage')->name('campSelection');
    Route::get('/camp-question', 'campQuestionPage')->name('campQuestion');
  });
});

Route::controller(FacebookAuthController::class)->prefix('auth')->name('auth.')->group(function() {
  Route::get('/redirect', 'redirect')->name('redirect');
  Route::get('/callback', 'callback')->name('callback');
  Route::get('/logout', 'logout')->name('logout');
  Route::get('/user', 'user')->name('user');
});
