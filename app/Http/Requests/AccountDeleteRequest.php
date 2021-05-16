<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountDeleteRequest extends FormRequest
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
      'accountEmail' => 'required|email:filter',
      'accountPassword' => 'required',
      'accountConfirmDelete' => 'required'
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
      'accountEmail.required' => 'El campo "Email" no puede estar vacío.',
      'accountEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'accountPassword.required' => 'El campo "Contraseña" no puede estar vacío.',
      'accountConfirmDelete.required' => 'El campo de "Confirmación de borrado" no puede estar vacío.'
    ];
  }
}
