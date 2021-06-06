<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AnimalToAdoptPostRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    $user = User::findOrFail(Auth::user()->user_id);
    return [
      // El email usado ha de ser único (que no exista en la BBDD). Sin embargo, se permitirá
      // que dicho valor no sea único cuando sea igual al email del usuario logueado.
      'indexAnimalEmail' => 'required|email:filter|unique:users,email,' . $user->email . ',email',
      'indexAnimalProvince' => 'required',
      'indexAnimalName' => 'required|regex:/^[\pL\s]+$/u',
      'indexAnimalAge' => 'required|digits_between:1,2',
      'indexAnimalGender' => 'required',
      'indexAnimalBreed' => 'required|regex:/^[\pL\s]+$/u',
      // Regex = Permite como máximo 5 caracteres númericos, y opcionalmente (y como máximo),
      // dos decimales. Como mínimo, habrá que introducir un número.
      'indexAnimalWeight' => 'required|numeric|regex:/^\d{1,3}+(\.\d{0,2})?$/',
      // La API donde alojaremos la imagen, permite un máximo de tamaño de archivo de 32MB.
      'indexAnimalImage' => 'required|max:32768',
      'indexAnimalDescription' => 'required|max:750',
      'indexAnimalVaccinated' => 'required',
      'indexAnimalHealthy' => 'required',
      'indexAnimalSterilize' => 'required',
      'indexAnimalCastrated' => 'required',
      'indexAnimalDewormed' => 'required',
      'indexAnimalMicrochip' => 'required'
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    return [
      'indexAnimalEmail.required' => 'El campo "Email" no puede estar vacío.',
      'indexAnimalEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'indexAnimalEmail.unique' => 'El email introducido se encuentra en uso.',
      'indexAnimalProvince.required' => 'Debe seleccionar una opción del campo "Provincia".',
      'indexAnimalName.required' => 'El campo "Nombre" no puede estar vacío.',
      'indexAnimalName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'indexAnimalAge.required' => 'El campo "Edad" no puede estar vacío.',
      'indexAnimalAge.digits_between' => 'El campo "Edad" solo permite valores númericos, sin espacios. Se permiten números hasta de dos cifras, y como mínimo, deberá tener una cifra.',
      'indexAnimalGender.required' => 'Debe seleccionar una opción del campo "Género".',
      'indexAnimalBreed.required' => 'El campo "Raza" no puede estar vacío.',
      'indexAnimalBreed.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Raza".',
      'indexAnimalWeight.required' => 'El campo "Peso" no puede estar vacío.',
      'indexAnimalWeight.numeric' => 'El campo "Peso" solo permite valores númericos, sin espacios.',
      'indexAnimalWeight.regex' => 'El campo "Peso" puede contener 5 caracteres númericos como máximo. Dos de ellos, como máximo, podrán de ser decimales.',
      'indexAnimalImage.required' => 'El campo "Imagen" no puede estar vacío.',
      'indexAnimalImage.max' => 'El tamaño máximo permitido para la imagen es de 32MB.',
      'indexAnimalDescription.required' => 'El campo "Descripción" no puede estar vacío.',
      'indexAnimalDescription.max' => 'El campo "Descripción" puede contener, como máximo, 750 caracteres.',
      'indexAnimalVaccinated.required' => 'Debe seleccionar una opción del campo "¿Está vacunado?".',
      'indexAnimalHealthy.required' => 'Debe seleccionar una opción del campo "¿Está sano?".',
      'indexAnimalSterilize.required' => 'Debe seleccionar una opción del campo "¿Está esterilizado?".',
      'indexAnimalCastrated.required' => 'Debe seleccionar una opción del campo "¿Está castrado?".',
      'indexAnimalDewormed.required' => 'Debe seleccionar una opción del campo "¿Está desparasitado?".',
      'indexAnimalMicrochip.required' => 'Debe seleccionar una opción del campo "¿Tiene microchip?".'
    ];
  }
}
