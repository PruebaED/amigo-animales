<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecurityPutRequest extends FormRequest
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
      'securityOldPassword' => 'required',
      'securityNewPassword' => 'required',
      'securityConfirmNewPassword' => 'required'
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
      'securityOldPassword.required' => 'El campo "Antigua contraseña" no puede estar vacío.',
      'securityNewPassword.required' => 'El campo "Nueva contraseña" no puede estar vacío.',
      'securityConfirmNewPassword.required' => 'El campo "Confirme nueva contraseña" no puede estar vacío.'
    ];
  }
}
