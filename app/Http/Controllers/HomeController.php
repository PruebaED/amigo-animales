<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class HomeController extends Controller
{
  public function getAnimalsToAdopt()
  {
    return view('index', array('animalsToAdopt' => Animal::all()->where('state', 'disponible')));
  }
}
