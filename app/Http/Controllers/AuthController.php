<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

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
    return redirect('/login');
  }

  public function postLogin(Request $request)
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
          return redirect(Session::get('url.intended', url('/')));
        }
      }
      return redirect('/');
    } else {
      return redirect('/login')->withInput();
    }
}

  public function postRegister(Request $request)
  {
    $user = new User();
    $user->name = $request->registerName;
    $user->surnames = $request->registerSurnames;
    $user->phone = $request->registerPhone;
    $user->email = $request->registerEmail;
    $user->province_id = $request->registerSelect;
    $user->password = Hash::make($request->registerPassword);
    $user->save();
    return redirect('/login');
  }
}
