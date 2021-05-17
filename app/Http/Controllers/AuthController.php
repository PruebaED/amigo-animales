<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;

class AuthController extends Controller
{
	public function getLogin()
  {
    // Creamos una variable de sesión que almacena la URL previa al acceso al inicio de sesión.
    session(['url.intended' => url()->previous()]);
    return view('auth.login');
  }

  public function getRegister()
  {
    return view('auth.register', array('provinces' => Province::all()));
  }

  public function getLogout(Request $request)
  {
    Auth::logout();
    return redirect('/login')->withSuccess('Ha cerrado sesión de forma satisfactoria.');
  }

  public function postLogin(LoginPostRequest $request)
  {
    $userData = array(
      'email' => $request->loginEmail,
      'password' => $request->loginPassword,
    );

    $rememberMe = false;

    if ($request->loginRememberMe) {
      $rememberMe = true;
    }

    if (Auth::attempt($userData, $rememberMe)) {
      // Si existe URL previa al inicio de sesión, el usuario será redirigido a la 
      // página en la que se encontraba tras introducir sus credenciales correctamente.
      if(session()->has('url.intended')) {
        $previousUrl = Session::get('url.intended', url('/'));
        if 
          (
            $previousUrl != 'http://amigo-animales.test/register' && 
            $previousUrl != 'http://amigo-animales.test/login'
          ) 
        {
          return redirect(Session::get('url.intended', url('/')))->withSuccess('Ha iniciado sesión de forma satisfactoria.');
        }
      }
      return redirect('/')->withSuccess('Ha iniciado sesión de forma satisfactoria.');
    } else {
      $errors = new MessageBag();
      $errors->add('incorrect_login_credentials', 'La contraseña introducida es incorrecta.');
      return redirect('/login')->withInput()->withErrors($errors);
    }
}

  public function postRegister(RegisterPostRequest $request)
  {
    $user = new User();
    $user->name = $request->registerName;
    $user->surnames = $request->registerSurnames;
    $user->phone = $request->registerPhone;
    $user->email = $request->registerEmail;
    $user->province_id = $request->registerSelect;
    $user->password = Hash::make($request->registerPassword);
    $user->save();
    Mail::to($user->email)->send(new UserRegistered($user));
    return redirect('/login')->withSuccess('Su cuenta ha sido registrada satisfactoriamente.');
  }
}
