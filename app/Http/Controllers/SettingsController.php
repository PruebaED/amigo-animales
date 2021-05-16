<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfilePutRequest;
use App\Http\Requests\AccountDeleteRequest;
use App\Http\Requests\SecurityPutRequest;
use Illuminate\Support\MessageBag;

class SettingsController extends Controller
{
  public function getAccount()
  {
    return view('settings.account');
  }

  public function getAppearance()
  {
    return view('settings.appearance');
  }

  public function getProfile()
  {
    return view('settings.profile');
  }

  public function getSecurity()
  {
    return view('settings.security');
  }

  public function deleteAccount(AccountDeleteRequest $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $confirmSentence = 'Deseo borrar mi cuenta';
    $errors = new MessageBag();
    if ($request->accountEmail == Auth::user()->email) {
      if (Hash::check($request->accountPassword, Auth::user()->password)) {
        if ($request->accountConfirmDelete == $confirmSentence) {
          $user->delete();
          $request->session()->flush();
          return redirect('login')->withSuccess('Ha eliminado su cuenta de forma satisfactoria.');
        } else {
          $errors->add('incorrect_confirm_deleteAccount', 'La frase de confirmación es incorrecta.');
        }
      } else {
        $errors->add('incorrect_password_deleteAccount', 'La contraseña introducida es incorrecta.');
      }
    } else {
      $errors->add('incorrect_email_deleteAccount', 'El email introducido no se corresponde al registrado en su cuenta.');
    }
    return redirect('account')->withInput()->withErrors($errors);
  }

  public function putAppearance(Request $request)
  {
    $selectedAppearance = $request->appearanceRadioButton;

    // Se almacena en la BBDD la preferencia de tema escogida por el usuario.
    $user = User::findOrFail(Auth::user()->user_id);
    $user->theme = $selectedAppearance;
    $user->save();

    // Nombre de la cookie = theme
    // Valor = el seleccionado por el usuario
    // Tiempo de expiración = 1 año
    // ¿Dónde está disponible la cookie? = en la totalidad del dominio
    setcookie('theme', $selectedAppearance, time() + 31556926, '/');
    return redirect('appearance')->withSuccess('Su preferencia de tema se ha guardado satisfactoriamente.');
  }

  public function putProfile(ProfilePutRequest $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $user->name = $request->profileName;
    $user->surnames = $request->profileSurnames;
    $user->email = $request->profileEmail;
    $user->phone = $request->profilePhone;
    $user->save();
    return redirect('profile')->withSuccess('Ha actualizado su perfil de forma satisfactoria.');
  }

  public function putSecurity(SecurityPutRequest $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $errors = new MessageBag();
    if (Hash::check($request->securityOldPassword, Auth::user()->password)) {
      if ($request->securityNewPassword == $request->securityConfirmNewPassword) {
        $user->password = Hash::make($request->securityNewPassword);
        $user->save();
        $request->session()->flush();
        return redirect('login')->withSuccess('Ha cambiado su contraseña de forma satisfactoria.');
      } else {
        $errors->add('incorrect_confirm_password_putSecurity', 'La nueva contraseña y la confirmación de la nueva contraseña
        no coinciden.');
      }
    } else {
      $errors->add('incorrect_password_putSecurity', 'Su antigua contraseña introducida es incorrecta.');
    } 
    return redirect('security')->withInput()->withErrors($errors);
  }
}
