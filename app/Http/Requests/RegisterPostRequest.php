<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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
      'registerName' => 'required|regex:/^[\pL\s]+$/u',
      'registerSurnames' => 'required|regex:/^[\pL\s]+$/u',
      'registerPhone' => 'required|numeric|digits:9|unique:users,phone',
      'registerEmail' => 'required|email:filter|unique:users,email',
      'registerSelect' => 'required',
      'registerPassword' => 'required|min:8'
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
      'registerName.required' => 'El campo "Nombre" no puede estar vacío.',
      'registerName.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre".',
      'registerSurnames.required' => 'El campo "Apellidos" no puede estar vacío.',
      'registerSurnames.regex' => 'Solo se permiten caracteres alfabéticos en el campo "Apellidos".',
      'registerPhone.required' => 'El campo "Teléfono" no puede estar vacío.',
      'registerPhone.numeric' => 'El campo "Teléfono" solo permite valores númericos, sin espacios.',
      'registerPhone.digits' => 'El campo "Teléfono" ha de contener 9 caracteres númericos.',
      'registerPhone.unique' => 'El teléfono introducido se encuentra en uso.',
      'registerEmail.required' => 'El campo "Email" no puede estar vacío.',
      'registerEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'registerEmail.unique' => 'El email introducido se encuentra en uso.',
      'registerSelect.required' => 'Debe seleccionar una provincia.',
      'registerPassword.required' => 'El campo "Contraseña" no puede estar vacío.',
      'registerPassword.min' => 'El campo "Contraseña" ha de contener, como mínimo, 8 caracteres.'
    ];
  }
}
