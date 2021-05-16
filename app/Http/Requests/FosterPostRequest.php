<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FosterPostRequest extends FormRequest
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
      'fosterName' => 'required|regex:/^[\pL\s]+$/u',
      'fosterSurnames' => 'required|regex:/^[\pL\s]+$/u',
      // El email y teléfono usados han de ser únicos (que no existan en la BBDD). Sin embargo, 
      // se permitirá que dichos valores no sean únicos cuando sean iguales al email o al
      // teléfono del usuario logueado.
      'fosterEmail' => 'required|email:filter|unique:users,email,' . $user->email . ',email',
      'fosterProvince' => 'required|alpha',
      'fosterPhone' => 'required|numeric|digits:9|unique:users,phone,' . $user->phone . ',phone',
      'fosterAnimalName' => 'required|alpha',
      'fosterAgreement' => 'required'
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
      'fosterName.required' => 'El campo "Nombre" no puede estar vacío.',
      'fosterName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'fosterSurnames.required' => 'El campo "Apellidos" no puede estar vacío.',
      'fosterSurnames.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Apellidos".',
      'fosterEmail.required' => 'El campo "Email" no puede estar vacío.',
      'fosterEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'fosterEmail.unique' => 'El email introducido se encuentra en uso.',
      'fosterProvince.required' => 'El campo "Provincia" no puede estar vacío',
      'fosterProvince.alpha' => 'Solo se permiten caracteres alfabéticos en el campo "Provincia".',
      'fosterPhone.required' => 'El campo "Teléfono" no puede estar vacío.',
      'fosterPhone.numeric' => 'El campo "Teléfono" solo permite valores númericos, sin espacios.',
      'fosterPhone.digits' => 'El campo "Teléfono" ha de contener 9 caracteres númericos.',
      'fosterPhone.unique' => 'El teléfono introducido se encuentra en uso.',
      'fosterAnimalName.required' => 'El campo "Nombre del animal" no puede estar vacío',
      'fosterAnimalName.alpha' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre del animal".',
      'fosterAgreement.required' => 'Debe aceptar los acuerdos de responsabilidad.'
    ];
  }
}
