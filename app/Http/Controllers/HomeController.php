<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animal;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnimalToAdoptPostRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnimalPosted;

class HomeController extends Controller
{
  public function getAnimalsToAdopt()
  {
    return view('index', 
                array('animalsToAdopt' => Animal::all()->where('state', 'disponible')), 
                array('provinces' => Province::all()));
  }

  public function postAnimalToAdopt(AnimalToAdoptPostRequest $request, $name = null) {
	$user = User::findOrFail(Auth::user()->user_id);
    $errors = new MessageBag();
   
	if ($request->indexAnimalEmail == $user->email) {
	  $animal = new Animal();
	  $animal->user_id = $user->user_id;
	  $animal->province_id = $request->indexAnimalProvince;
	  $animal->name = $request->indexAnimalName;
	  $animal->age = $request->indexAnimalAge;
	  $animal->gender = $request->indexAnimalGender;
	  $animal->breed = $request->indexAnimalBreed;
	  $animal->weight = $request->indexAnimalWeight;

	  // Realizamos las correspondientes conversiones a la imagen que el usuario nos
	  // ha proporcionado. Subimos la imagen a imgbb (página que permite el alojamiento
	  // de imágenes), haciendo uso de su API. Tras producirse la subida de la imagen de
	  // forma correcta, recuperamos del JSON que nos devuelve la API, la dirección de
	  // la imagen. Esta se introduce en el campo 'image' del animal, para posteriormente
	  // ser mostrada a los usuarios de 'El Amigo de los Animales'.
	  $API_KEY = env('IMGBB_KEY');
	  $image = $request->indexAnimalImage;
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL, 'https://api.imgbb.com/1/upload?key='.$API_KEY);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($ch, CURLOPT_POST, 1);
	  $extension = pathinfo($image,PATHINFO_EXTENSION);
	  $file_name = ($name)? $name.'.'.$extension : $image ;
	  $data = array('image' => base64_encode(file_get_contents($image)), 'name' => $file_name);
	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	  $result = curl_exec($ch);
	  if (curl_errno($ch)) {
	    $animal->image = 'IMGBB API ERROR';
	  } else {
	    $imageLink = json_decode($result, true);
	    $animal->image = $imageLink['data']['url'];
	  }
	  curl_close($ch);
	  // ********** //

	  $animal->state = 'disponible';
	  $animal->description = $request->indexAnimalDescription;
	  $animal->vaccinated = $request->indexAnimalVaccinated;
	  $animal->healthy = $request->indexAnimalHealthy;
	  $animal->sterilize = $request->indexAnimalSterilize;
	  $animal->castrated = $request->indexAnimalCastrated;
	  $animal->dewormed = $request->indexAnimalDewormed;
	  $animal->microchip = $request->indexAnimalMicrochip;
	  $animal->save();

	  Mail::to($user->email)->send(new AnimalPosted($user, $animal));
	  return redirect('/#adoption')->withSuccess('Ha publicado su animal de forma satisfactoria.');
	} else {
	  $errors->add('incorrect_email_postAnimal', 'El email introducido no se corresponde al registrado en su cuenta.');
	}
    return redirect('/#adoption')->withInput()->withErrors($errors);
  }
}
