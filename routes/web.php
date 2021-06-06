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
	Route::get('/', 'App\Http\Controllers\HomeController@getAnimalsToAdopt');
	Route::post('/', 'App\Http\Controllers\HomeController@postAnimalToAdopt');
	
	Route::get('auth/logout', 'App\Http\Controllers\AuthController@getLogout');

	Route::get('animals/adopt/{id}', 'App\Http\Controllers\AnimalsController@getAdopt');
	Route::post('animals/adopt/{id}', 'App\Http\Controllers\AnimalsController@postAdopt');

	Route::get('animals/foster/{id}', 'App\Http\Controllers\AnimalsController@getFoster');
	Route::post('animals/foster/{id}', 'App\Http\Controllers\AnimalsController@postFoster');

	Route::get('animals/missings', 'App\Http\Controllers\AnimalsController@getMissingAnimals');
	Route::post('animals/missings', 'App\Http\Controllers\AnimalsController@postMissingAnimalViewed');
	Route::post('animals/missings/post', 'App\Http\Controllers\AnimalsController@postMissingAnimal');

	Route::get('contact/form', 'App\Http\Controllers\ContactController@getContactForm');
	Route::post('contact/form', 'App\Http\Controllers\ContactController@postContactForm');

	Route::get('settings/account', 'App\Http\Controllers\SettingsController@getAccount');
	Route::delete('settings/account', 'App\Http\Controllers\SettingsController@deleteAccount');

	Route::get('settings/appearance', 'App\Http\Controllers\SettingsController@getAppearance');
	Route::put('settings/appearance', 'App\Http\Controllers\SettingsController@putAppearance');

	Route::get('settings/profile', 'App\Http\Controllers\SettingsController@getProfile');
	Route::put('settings/profile', 'App\Http\Controllers\SettingsController@putProfile');

	Route::get('settings/security', 'App\Http\Controllers\SettingsController@getSecurity');
	Route::put('settings/security', 'App\Http\Controllers\SettingsController@putSecurity');
});

Route::get('animals/deliver', 'App\Http\Controllers\AnimalsController@getDeliver');

Route::get('animals/detail-view/{id}', 'App\Http\Controllers\AnimalsController@getDetailView');

Route::get('animals/rescue', 'App\Http\Controllers\AnimalsController@getRescue');

Route::get('auth/login', 'App\Http\Controllers\AuthController@getLogin')->name('login');
Route::post('auth/login', 'App\Http\Controllers\AuthController@postLogin');

Route::get('auth/register', 'App\Http\Controllers\AuthController@getRegister');
Route::post('auth/register', 'App\Http\Controllers\AuthController@postRegister');

Route::get('password/reset', 'App\Http\Controllers\PasswordResetController@getPasswordReset');
Route::post('password/reset', 'App\Http\Controllers\PasswordResetController@postSendResetLinkEmail');

Route::get('password/reset/{token}', 'App\Http\Controllers\PasswordResetController@getSetPasswordReset');
Route::post('password/reset/{token}', 'App\Http\Controllers\PasswordResetController@postPasswordResetSetted');

Route::get('contact/about-us', 'App\Http\Controllers\ContactController@getAboutUs');

Route::get('contact/information', 'App\Http\Controllers\ContactController@getContactInformation');

Route::get('information/animals-pd', 'App\Http\Controllers\InformationController@getAnimalsPd');

Route::get('information/regulations', 'App\Http\Controllers\InformationController@getRegulations');

Route::get('errors/404', 'App\Http\Controllers\ErrorHandlerController@get404Error');
