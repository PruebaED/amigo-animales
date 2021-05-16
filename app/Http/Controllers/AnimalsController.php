<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Adoption;
use App\Models\Foster;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AdoptPostRequest;
use App\Http\Requests\FosterPostRequest;
use Illuminate\Support\MessageBag;

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
    // Creamos una variable de sesión que almacena la URL previa al acceso del proceso de acogida.
    session(['url.intended' => url()->previous()]);
    return view('animals.adopt',
      array(
        'animal' => Animal::findOrFail($id)
      )
    );
  }

  public function getFoster($id)
  {
    // Creamos una variable de sesión que almacena la URL previa al acceso del proceso de acogida.
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

  public function postAdopt(AdoptPostRequest $request, $id)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $animal = Animal::findOrFail($id);
    $errors = new MessageBag();
    // Un usuario no puede adoptar a un animal que ya le 'pertenece'.
    if ($user->user_id != $animal->userAnimal->user_id) {
      if ($request->adoptEmail == $user->email) {
        if ($request->adoptAnimalName == $animal->name) {
          $adoption = new Adoption();
          $adoption->user_id = $user->user_id;
          $adoption->animal_id = $animal->animal_id;
          $adoption->adopted_at = date('Y/m/d');
          $agreementAccepted = false;
          if ($request->adoptAgreement) {
            $agreementAccepted = true;
          }
          $adoption->accepted_agreement = $agreementAccepted;
          $adoption->save();

          // El animal adoptado pertenece ahora a otro usuario (aunque lo acoja temporalmente).
          $animal->user_id = $user->user_id;
          $animal->state = 'adoptado';
          $animal->save();

          return redirect('/#adopcion')->withSuccess('Ha adoptado a ' . $animal->name . ' de forma satisfactoria.');
        } else {
          $errors->add('incorrect_animal_postAdopt', 'El nombre del animal introducido no se corresponde al seleccionado para
          el proceso de adopción.');
        }
      } else {
        $errors->add('incorrect_email_postAdopt', 'El email introducido no se corresponde al registrado en su cuenta.');
      }
    } else {
      $errors->add('incorrect_user_postAdopt', 'No puede adoptar a un animal que ya le pertenece.');
    }
    return redirect('adopt/' . $animal->animal_id)->withInput()->withErrors($errors);
  }

  public function postFoster(FosterPostRequest $request, $id)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $animal = Animal::findOrFail($id);
    $errors = new MessageBag();
    // Un usuario no puede acoger a un animal que ya le 'pertenece'.
    if ($user->user_id != $animal->userAnimal->user_id) {
      if ($request->fosterEmail == $user->email) {
        if ($request->fosterAnimalName == $animal->name) {
          $foster = new Foster();
          $foster->user_id = $user->user_id;
          $foster->animal_id = $animal->animal_id;
          $foster->fostered_at = date('Y/m/d');
          $agreementAccepted = false;
          if ($request->fosterAgreement) {
            $agreementAccepted = true;
          }
          $foster->accepted_agreement = $agreementAccepted;
          $foster->save();

          // El animal acogido pertenece ahora a otro usuario (aunque lo acoja temporalmente).
          $animal->user_id = $user->user_id;
          $animal->state = 'acogido';
          $animal->save();

          return redirect('/#adopcion')->withSuccess('Ha acogido a ' . $animal->name . ' de forma satisfactoria.');
        } else {
          $errors->add('incorrect_animal_postAdopt', 'El nombre del animal introducido no se corresponde al seleccionado para
          el proceso de acogida.');
        }
      } else {
        $errors->add('incorrect_email_postFoster', 'El email introducido no se corresponde al registrado en su cuenta.');
      }
    } else {
      $errors->add('incorrect_user_postFoster', 'No puede acoger a un animal que ya le pertenece.');
    }
    return redirect('foster/' . $animal->animal_id)->withInput()->withErrors($errors);
  }
}
