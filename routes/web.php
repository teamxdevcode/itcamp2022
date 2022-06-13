<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FacebookAuthController;
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
    Route::get('/register/education-certificate', 'educationalCertificateFile')->name('educational-certificate');
  });
});
