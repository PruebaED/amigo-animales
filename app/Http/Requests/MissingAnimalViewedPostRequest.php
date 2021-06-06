<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MissingAnimalViewedPostRequest extends FormRequest
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
      // El email usado ha de ser único (que no exista en la BBDD). Sin embargo, se permitirá
      // que dicho valor no sean único cuando sea iguale al email del usuario logueado.
      'reportEmail' => 'required|email:filter|unique:users,email,' . $user->email . ',email',
      'reportSelect' => 'required',
      'reportAnimalName' => 'required|alpha'
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
      'reportEmail.required' => 'El campo "Email" no puede estar vacío.',
      'reportEmail.email' => 'Ha de cumplir con el patrón texto@texto.dominio en el campo "Email".',
      'reportEmail.unique' => 'El email introducido se encuentra en uso.',
      'reportSelect.required' => 'El campo "Provincia" no puede estar vacío',
      'reportAnimalName.required' => 'El campo "Nombre del animal" no puede estar vacío',
      'reportAnimalName.alpha' => 'Solo se permiten caracteres alfabéticos en el campo "Nombre del animal".'
    ];
  }
}
