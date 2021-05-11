<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Adoption;
use App\Models\Foster;
use Illuminate\Support\Facades\Session;

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

  public function getAdopt($id)
  {
    // Creamos una cookie que almacena la URL previa al acceso del proceso de acogida.
    session(['url.intended' => url()->previous()]);
    return view('animals.adopt',
      array(
        'animal' => Animal::findOrFail($id)
      )
    );
  }

  public function getFoster($id)
  {
    // Creamos una cookie que almacena la URL previa al acceso del proceso de acogida.
    session(['url.intended' => url()->previous()]);
    return view('animals.foster',
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

  public function postAdopt(Request $request, $id)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $animal = Animal::findOrFail($id);
    if 
      (
        // Un usuario no puede adoptar a un animal que ya le 'pertenece'.
        $user->user_id != $animal->userAnimal->user_id &&
        $request->adoptEmail == $user->email &&
        $request->adoptAnimalName == $animal->name
      )
    {
      $adoption = new Adoption();
      $adoption->user_id = $user->user_id;
      $adoption->animal_id = $animal->animal_id;
      $adoption->adopted_at = date('Y/m/d');
      $adoption->accepted_agreement = true;
      $adoption->save();

      // El animal adoptado pertenece ahora a otro usuario (aunque lo acoja temporalmente).
      $animal->user_id = $user->user_id;
      $animal->state = 'adoptado';
      $animal->save();

      return redirect('/#adopcion');
    }
    if(session()->has('url.intended')) {
      return redirect(Session::get('url.intended', url('/')));
    }
  }

  public function postFoster(Request $request, $id)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $animal = Animal::findOrFail($id);
    if 
      (
        // Un usuario no puede acoger a un animal que ya le 'pertenece'.
        $user->user_id != $animal->userAnimal->user_id &&
        $request->fosterEmail == $user->email &&
        $request->fosterAnimalName == $animal->name
      )
    {
      $foster = new Foster();
      $foster->user_id = $user->user_id;
      $foster->animal_id = $animal->animal_id;
      $foster->fostered_at = date('Y/m/d');
      $foster->accepted_agreement = true;
      $foster->save();

      // El animal acogido pertenece ahora a otro usuario (aunque lo acoja temporalmente).
      $animal->user_id = $user->user_id;
      $animal->state = 'acogido';
      $animal->save();

      return redirect('/#adopcion');
    }
    if(session()->has('url.intended')) {
      return redirect(Session::get('url.intended', url('/')));
    }
  }
}
