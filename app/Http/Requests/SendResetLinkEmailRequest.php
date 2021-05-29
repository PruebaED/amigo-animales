<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendResetLinkEmailRequest extends FormRequest
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
      'passwordResetEmail' => 'required|email:filter|exists:users,email'
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
      'passwordResetEmail.required' => 'El campo "Email" no puede estar vacío.',
      'passwordResetEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'passwordResetEmail.exists' => 'El email introducido no existe.'
    ];
  }
}
