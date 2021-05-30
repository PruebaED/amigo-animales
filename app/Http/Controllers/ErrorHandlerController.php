<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends Controller
{
  public function get404Error()
  {
		return view('errors.404');
  }
}
