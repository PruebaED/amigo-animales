<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	public function getLogin()
  {
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
