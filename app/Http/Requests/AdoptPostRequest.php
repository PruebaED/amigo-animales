<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdoptPostRequest extends FormRequest
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
      'adoptName' => 'required|regex:/^[\pL\s]+$/u',
      'adoptSurnames' => 'required|regex:/^[\pL\s]+$/u',
      // El email y teléfono usados han de ser únicos (que no existan en la BBDD). Sin embargo, 
      // se permitirá que dichos valores no sean únicos cuando sean iguales al email o al
      // teléfono del usuario logueado.
      'adoptEmail' => 'required|email:filter|unique:users,email,' . $user->email . ',email',
      'adoptProvince' => 'required|alpha',
      'adoptPhone' => 'required|numeric|digits:9|unique:users,phone,' . $user->phone . ',phone',
      'adoptAnimalName' => 'required|alpha',
      'adoptAgreement' => 'required'
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
      'adoptName.required' => 'El campo "Nombre" no puede estar vacío.',
      'adoptName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'adoptSurnames.required' => 'El campo "Apellidos" no puede estar vacío.',
      'adoptSurnames.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Apellidos".',
      'adoptEmail.required' => 'El campo "Email" no puede estar vacío.',
      'adoptEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'adoptEmail.unique' => 'El email introducido se encuentra en uso.',
      'adoptProvince.required' => 'El campo "Provincia" no puede estar vacío',
      'adoptProvince.alpha' => 'Solo se permiten caracteres alfabéticos en el campo "Provincia".',
      'adoptPhone.required' => 'El campo "Teléfono" no puede estar vacío.',
      'adoptPhone.numeric' => 'El campo "Teléfono" solo permite valores númericos, sin espacios.',
      'adoptPhone.digits' => 'El campo "Teléfono" ha de contener 9 caracteres númericos.',
      'adoptPhone.unique' => 'El teléfono introducido se encuentra en uso.',
      'adoptAnimalName.required' => 'El campo "Nombre del animal" no puede estar vacío',
      'adoptAnimalName.alpha' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre del animal".',
      'adoptAgreement.required' => 'Debe aceptar los acuerdos de responsabilidad.'
    ];
  }
}
