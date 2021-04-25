<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class AuthController extends Controller
{
  public function getLoginRegister()
  {
    return view('auth.login-register', array('provinces' => Province::all()));
  }
}
