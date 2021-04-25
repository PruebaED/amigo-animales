<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
  public function getDeliver()
  {
		return view('animals.deliver');
  }

  public function getDetailView($id)
  {
    return view('animals.detail-view',
      array(
        'animal' => Animal::findOrFail($id)
      )
    );
  }

  public function getMissingAnimals()
  {
    return view('animals.missing-animals', array('missingAnimals' => Animal::all()->where('state', 'desaparecido')));
  }

  public function getRescue()
  {
		return view('animals.rescue');
  }
}
