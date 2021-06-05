<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfilePutRequest extends FormRequest
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
      'profileName' => 'required|regex:/^[\pL\s]+$/u',
      'profileSurnames' => 'required|regex:/^[\pL\s]+$/u',
      // El cambio de email y de teléfono ha de ser por un valor único (no existente en la BBDD).
      // Sin embargo, se permitirá que dichos valores no sean únicos cuando sean iguales al email
      // o al teléfono del usuario logueado.
      'profilePhone' => 'required|numeric|digits:9|unique:users,phone,' . $user->phone . ',phone',
      'profileEmail' => 'required|email:filter|unique:users,email,' . $user->email . ',email',
      'profileProvince' => 'required',
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
      'profileName.required' => 'El campo "Nombre" no puede estar vacío.',
      'profileName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'profileSurnames.required' => 'El campo "Apellidos" no puede estar vacío.',
      'profileSurnames.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Apellidos".',
      'profilePhone.required' => 'El campo "Teléfono" no puede estar vacío.',
      'profilePhone.numeric' => 'El campo "Teléfono" solo permite valores númericos.',
      'profilePhone.digits' => 'El campo "Teléfono" ha de contener 9 caracteres númericos.',
      'profilePhone.unique' => 'El teléfono introducido se encuentra en uso.',
      'profileEmail.required' => 'El campo "Email" no puede estar vacío.',
      'profileEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'profileEmail.unique' => 'El email introducido se encuentra en uso.',
      'profileProvince.required' => 'El campo "Provincia" no puede estar vacío'
    ];
  }
}
