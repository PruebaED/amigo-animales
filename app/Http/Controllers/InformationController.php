<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
  public function getAnimalsPd()
  {
    return view('information.animals-pd');
  }

  public function getRegulations()
  {
    return view('information.regulations');
  }
}
