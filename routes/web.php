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

Route::group(['middleware' => 'auth'], function(){
	Route::get('logout', 'App\Http\Controllers\AuthController@getLogout');

	Route::get('account', 'App\Http\Controllers\SettingsController@getAccount');
	Route::delete('account', 'App\Http\Controllers\SettingsController@deleteAccount');

	Route::get('appearance', 'App\Http\Controllers\SettingsController@getAppearance');
	Route::put('appearance', 'App\Http\Controllers\SettingsController@putAppearance');

	Route::get('profile', 'App\Http\Controllers\SettingsController@getProfile');
	Route::put('profile', 'App\Http\Controllers\SettingsController@putProfile');

	Route::get('security', 'App\Http\Controllers\SettingsController@getSecurity');
	Route::put('security', 'App\Http\Controllers\SettingsController@putSecurity');
});

Route::get('/', 'App\Http\Controllers\HomeController@getAnimalsToAdopt');

Route::get('deliver', 'App\Http\Controllers\AnimalsController@getDeliver');

Route::get('detail-view/{id}', 'App\Http\Controllers\AnimalsController@getDetailView');

Route::get('missing-animals', 'App\Http\Controllers\AnimalsController@getMissingAnimals');

Route::get('rescue', 'App\Http\Controllers\AnimalsController@getRescue');

Route::get('login', 'App\Http\Controllers\AuthController@getLogin')->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@postLogin');

Route::get('register', 'App\Http\Controllers\AuthController@getRegister');
Route::post('register', 'App\Http\Controllers\AuthController@postRegister');

Route::get('about-us', 'App\Http\Controllers\ContactController@getAboutUs');

Route::get('contact-form', 'App\Http\Controllers\ContactController@getContactForm');

Route::get('contact-information', 'App\Http\Controllers\ContactController@getContactInformation');

Route::get('animals-pd', 'App\Http\Controllers\InformationController@getAnimalsPd');

Route::get('regulations', 'App\Http\Controllers\InformationController@getRegulations');
