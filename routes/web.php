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

Route::get('/', function () {
    return view('index');
});

Route::get('/deliver', function () {
    return view('animals.deliver');
});

// TO-DO. Adaptar la ruta vista-detalle de un animal en adopción. Al hacer click en un animal
// de los del listado, se recoge su id, se pasa a la vista-detalle, mostrando el animal que
// corresponda.
Route::get('/detail-view', function () {
    return view('animals.detail-view');
});

Route::get('/missing-animals', function () {
    return view('animals.missing-animals');
});

Route::get('/rescue', function () {
    return view('animals.rescue');
});

Route::get('/login-register', function () {
    return view('auth.login-register');
});

Route::get('/about-us', function () {
    return view('contact.about-us');
});

Route::get('/contact-form', function () {
    return view('contact.contact-form');
});

Route::get('/contact-information', function () {
    return view('contact.contact-information');
});

Route::get('/animals-pd', function () {
    return view('information.animals-pd');
});

Route::get('/regulations', function () {
    return view('information.regulations');
});

Route::get('/account', function () {
    return view('settings.account');
});

Route::get('/appearance', function () {
    return view('settings.appearance');
});

Route::get('/profile', function () {
    return view('settings.profile');
});

Route::get('/security', function () {
    return view('settings.security');
});
