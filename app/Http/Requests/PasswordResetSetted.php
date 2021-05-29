<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetSetted extends FormRequest
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
      'passwordResetSettedEmail' => 'required|email:filter|exists:users,email',
      'passwordResetSettedNewPassword' => 'required|min:8',
      'passwordResetSettedConfirmNewPassword' => 'required'
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
      'passwordResetSettedEmail.required' => 'El campo "Email" no puede estar vacío.',
      'passwordResetSettedEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'passwordResetSettedEmail.exists' => 'El email introducido no existe.',
      'passwordResetSettedNewPassword.required' => 'El campo "Nueva contraseña" no puede estar vacío.',
      'passwordResetSettedNewPassword.min' => 'La contraseña ha de contener, como mínimo, 8 caracteres.',
      'passwordResetSettedConfirmNewPassword.required' => 'El campo "Confirme nueva contraseña" no puede estar vacío.'
    ];
  }
}
