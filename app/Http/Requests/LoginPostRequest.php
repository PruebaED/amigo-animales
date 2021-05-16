<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginPostRequest extends FormRequest
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
    return [
      'loginEmail' => 'required|email:filter|exists:users,email',
      'loginPassword' => 'required'
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
      'loginEmail.required' => 'El campo "Email" no puede estar vacío.',
      'loginEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'loginEmail.exists' => 'El email introducido no existe.',
      'loginPassword.required' => 'El campo "Contraseña" no puede estar vacío.'
    ];
  }
}
