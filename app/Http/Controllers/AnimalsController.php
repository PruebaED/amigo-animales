<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Adoption;
use App\Models\Foster;
use App\Models\Report;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AdoptPostRequest;
use App\Http\Requests\FosterPostRequest;
use App\Http\Requests\MissingAnimalPostRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnimalAdopted;
use App\Mail\AnimalFostered;
use App\Mail\MissingAnimalReport;
use App\Mail\MissingAnimalViewed;

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
                array('animal' => Animal::findOrFail($id)),
                array('provinces' => Province::all())
    );
  }

  public function getFoster($id)
  {
    // Creamos una variable de sesión que almacena la URL previa al acceso del proceso de acogida.
    session(['url.intended' => url()->previous()]);
    return view('animals.foster',
                array('animal' => Animal::findOrFail($id)),
                array('provinces' => Province::all())
    );
  }

  public function getMissingAnimals()
  {
    return view('animals.missing-animals', 
                array('missingAnimals' => Animal::all()->where('state', 'desaparecido')), 
                array('provinces' => Province::all()));
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

          Mail::to($user->email)->send(new AnimalAdopted($user, $animal));
          return redirect('/#adoption')->withSuccess('Ha adoptado a ' . $animal->name . ' de forma satisfactoria.');
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
    return redirect('/animals/adopt/' . $animal->animal_id)->withInput()->withErrors($errors);
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

          Mail::to($user->email)->send(new AnimalFostered($user, $animal));
          return redirect('/#adoption')->withSuccess('Ha acogido a ' . $animal->name . ' de forma satisfactoria.');
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
    return redirect('/animals/foster/' . $animal->animal_id)->withInput()->withErrors($errors);
  }

  public function postMissingAnimalViewed(MissingAnimalPostRequest $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $animal = Animal::findOrFail($request->reportAnimalId);
    $animalOwner = User::findOrFail($animal->userAnimal->user_id);
    $errors = new MessageBag();
    // Un usuario no puede reportar el avistamiento de un animal que ya le 'pertenece'.
    if ($user->user_id != $animal->userAnimal->user_id) {
      if ($request->reportEmail == $user->email) {
        if ($request->reportAnimalName == $animal->name) {
          $report = new Report();
          $report->user_id = $user->user_id;
          $report->animal_id = $animal->animal_id;
          $report->province_id = $request->reportSelect;
          $report->viewed_at = date('Y/m/d');
          $report->save();

          Mail::to($user->email)->send(new MissingAnimalReport($user, $animal));
          Mail::to($animalOwner->email)->send(new MissingAnimalViewed($animalOwner, $animal, $user, Province::findOrFail($request->reportSelect)));
          return redirect('/animals/missings')->withSuccess('Ha reportado el avistamiento de ' . $animal->name . ' de forma satisfactoria.');
        } else {
          $errors->add('incorrect_animal_postAnimalViewed', 'El nombre del animal introducido no se corresponde al seleccionado para
          el proceso de reporte de avistamiento.');
        }
      } else {
        $errors->add('incorrect_email_postAnimalViewed', 'El email introducido no se corresponde al registrado en su cuenta.');
      }
    } else {
      $errors->add('incorrect_user_postAnimalViewed', 'No puede reportar haber visto a un animal que le pertenece.');
    }
    return redirect('/animals/missings')->withInput()->withErrors($errors);
  }
}
