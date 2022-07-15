<?php

use App\Http\Controllers\AdminController;
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
  Route::get('/logout', 'logout')->middleware('auth:web,admin')->name('logout');
});

Route::controller(AppController::class)->group(function() {
  Route::get('/', 'home')->name('home');
  Route::middleware('auth')->group(function() {
    // Route::get('/register', 'register')->name('register');
    // Route::get('/question', 'question')->name('question');
    Route::get('/confirmation', 'confirmation')->name('confirmation');
    Route::get('/register/education-certificate', 'educationalCertificateFile')->name('educational-certificate');
  });
});

Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function() {
  Route::group(['middleware' => 'auth:admin'], function() {
    Route::get('/', 'dashboard')->name('dashboard');
    Route::group(['middleware'=>'auth.except:viwer,recreation'], function() {
      /* Registration table and details */
      Route::get('/registrations', 'registrations')->name('registrations');
      Route::get('/registrations/details/{applicant_id}', 'applicantDetails')->name('registrations.details');

      /* Export and load files */
      Route::get('/export/{subcamp}', 'export')->name('export');
      Route::get('/document/{doc_type}/{applicant_id}', 'document')->name('view.document');

      /* Confirmation table and details */
      Route::get('/confirmation', 'confirmation')->name('confirmation');
      Route::get('/confirmation/{applicant_id}', 'confirmationDetail')->name('confirmation.detail');
    });
    Route::get('/signout', 'signout')->name('signout');
  });
  Route::get('/signin', 'signin')->middleware('guest:admin')->name('signin');
});

