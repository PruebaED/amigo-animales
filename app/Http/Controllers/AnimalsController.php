<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
