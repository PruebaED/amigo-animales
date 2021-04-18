<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('deliver', 'App\Http\Controllers\AnimalsController@deliver');

Route::get('detail-view/{id}', 'App\Http\Controllers\AnimalsController@detail_view');

Route::get('missing-animals', 'App\Http\Controllers\AnimalsController@missing_animals');

Route::get('rescue', 'App\Http\Controllers\AnimalsController@rescue');

// Se modificará cuándo se llegue al apartado de AUTH.
Route::get('login-register', function () {
  return view('auth.login-register');
});

Route::get('about-us', 'App\Http\Controllers\ContactController@about_us');

Route::get('contact-form', 'App\Http\Controllers\ContactController@contact_form');

Route::get('contact-information', 'App\Http\Controllers\ContactController@contact_information');

Route::get('animals-pd', 'App\Http\Controllers\InformationController@animals_pd');

Route::get('regulations', 'App\Http\Controllers\InformationController@regulations');

Route::get('account', 'App\Http\Controllers\SettingsController@account');

Route::get('appearance', 'App\Http\Controllers\SettingsController@appearance');

Route::get('profile', 'App\Http\Controllers\SettingsController@profile');

Route::get('security', 'App\Http\Controllers\SettingsController@security');
