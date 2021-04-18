<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
  public function animals_pd()
  {
    return view('information.animals-pd');
  }

  public function regulations()
  {
    return view('information.regulations');
  }
}
