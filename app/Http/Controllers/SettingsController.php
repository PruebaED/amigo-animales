<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
  public function account()
  {
    return view('settings.account');
  }

  public function appearance()
  {
    return view('settings.appearance');
  }

  public function profile()
  {
    return view('settings.profile');
  }

  public function security()
  {
    return view('settings.security');
  }
}
