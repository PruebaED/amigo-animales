<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactFormPostRequest extends FormRequest
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
      'contactFormName' => 'required|regex:/^[\pL\s]+$/u',
      'contactFormSurnames' => 'required|regex:/^[\pL\s]+$/u',
      // El eléfono usado ha de ser único (que no exista en la BBDD). Sin embargo, se permitirá
      // permitirá que dicho valor no sea único cuando sea igual al teléfono del usuario logueado.
      'contactFormPhone' => 'required|numeric|digits:9|unique:users,phone,' . $user->phone . ',phone',
      'contactFormQuery' => 'required'
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
      'contactFormName.required' => 'El campo "Nombre" no puede estar vacío.',
      'contactFormName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'contactFormSurnames.required' => 'El campo "Apellidos" no puede estar vacío.',
      'contactFormSurnames.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Apellidos".',
      'contactFormPhone.required' => 'El campo "Teléfono" no puede estar vacío.',
      'contactFormPhone.numeric' => 'El campo "Teléfono" solo permite valores númericos, sin espacios.',
      'contactFormPhone.digits' => 'El campo "Teléfono" ha de contener 9 caracteres númericos.',
      'contactFormPhone.unique' => 'El teléfono introducido se encuentra en uso.',
      'contactFormQuery.required' => 'El campo "Motivo de la consulta" no puede estar vacío.'
    ];
  }
}
