<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
  public function deliver()
  {
		return view('animals.deliver');
  }

  // Falta que reciba como parámetro el $id y lo envié en el return. Algo tipo:
  // return view('animals.detail-view', array('animal' => Animal::findOrFail($id)));
  public function detail_view($id)
  {
		return view('animals.detail-view');
  }

  public function missing_animals()
  {
		return view('animals.missing-animals');
  }

  public function rescue()
  {
		return view('animals.rescue');
  }
}
