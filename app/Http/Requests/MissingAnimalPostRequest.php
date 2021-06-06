<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MissingAnimalPostRequest extends FormRequest
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
      'missingAnimalEmail' => 'required|email:filter|unique:users,email,' . $user->email . ',email',
      'missingAnimalDate' => 'required|before:tomorrow',
      'missingAnimalProvince' => 'required',
      'missingAnimalName' => 'required|regex:/^[\pL\s]+$/u',
      'missingAnimalGender' => 'required',
      'missingAnimalBreed' => 'required|regex:/^[\pL\s]+$/u',
      // La API donde alojaremos la imagen, permite un máximo de tamaño de archivo de 32MB.
      'missingAnimalImage' => 'required|max:32768',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    $today = date('d/m/Y', time());
    return [
      'missingAnimalEmail.required' => 'El campo "Email" no puede estar vacío.',
      'missingAnimalEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'missingAnimalEmail.unique' => 'El email introducido se encuentra en uso.',
      'missingAnimalDate.required' => 'El campo "Fecha de desaparición" no puede estar vacío.',
      'missingAnimalDate.before' => 'La fecha de desaparición podrá ser, como máximo, igual al ' . $today . '.',
      'missingAnimalProvince.required' => 'Debe seleccionar una opción del campo "Provincia".',
      'missingAnimalName.required' => 'El campo "Nombre" no puede estar vacío.',
      'missingAnimalName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'missingAnimalGender.required' => 'Debe seleccionar una opción del campo "Género".',
      'missingAnimalBreed.required' => 'El campo "Raza" no puede estar vacío.',
      'missingAnimalBreed.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Raza".',
      'missingAnimalImage.required' => 'El campo "Imagen" no puede estar vacío.',
      'missingAnimalImage.max' => 'El tamaño máximo permitido para la imagen es de 32MB.'
    ];
  }
}
