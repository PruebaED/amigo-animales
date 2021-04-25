<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
  public function getAccount()
  {
    return view('settings.account');
  }

  public function getAppearance()
  {
    return view('settings.appearance');
  }

  public function getProfile()
  {
    return view('settings.profile');
  }

  public function getSecurity()
  {
    return view('settings.security');
  }
}
