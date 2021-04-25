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

Route::get('/', 'App\Http\Controllers\HomeController@getAnimalsToAdopt');

Route::get('deliver', 'App\Http\Controllers\AnimalsController@getDeliver');

Route::get('detail-view/{id}', 'App\Http\Controllers\AnimalsController@getDetailView');

Route::get('missing-animals', 'App\Http\Controllers\AnimalsController@getMissingAnimals');

Route::get('rescue', 'App\Http\Controllers\AnimalsController@getRescue');

Route::get('login-register', 'App\Http\Controllers\AuthController@getLoginRegister');

Route::get('about-us', 'App\Http\Controllers\ContactController@getAboutUs');

Route::get('contact-form', 'App\Http\Controllers\ContactController@getContactForm');

Route::get('contact-information', 'App\Http\Controllers\ContactController@getContactInformation');

Route::get('animals-pd', 'App\Http\Controllers\InformationController@getAnimalsPd');

Route::get('regulations', 'App\Http\Controllers\InformationController@getRegulations');

Route::get('account', 'App\Http\Controllers\SettingsController@getAccount');

Route::get('appearance', 'App\Http\Controllers\SettingsController@getAppearance');

Route::get('profile', 'App\Http\Controllers\SettingsController@getProfile');

Route::get('security', 'App\Http\Controllers\SettingsController@getSecurity');
