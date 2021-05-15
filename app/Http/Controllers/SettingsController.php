<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

  public function deleteAccount(Request $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $confirmSentence = 'Deseo borrar mi cuenta';
    if 
      (
      $request->accountEmail == Auth::user()->email &&
      Hash::check($request->accountPassword, Auth::user()->password) &&
      $request->accountConfirmDelete == $confirmSentence
      ) 
    {
      $user->delete();
      return redirect('logout');
    }
    return redirect('account');
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
    return redirect('appearance');
  }

  public function putProfile(Request $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $user->name = $request->profileName;
    $user->surnames = $request->profileSurnames;
    $user->email = $request->profileEmail;
    $user->phone = $request->profilePhone;
    $user->save();
    return redirect('profile');
  }

  public function putSecurity(Request $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    if (Hash::check($request->securityOldPassword, Auth::user()->password))
    {
      if ($request->securityNewPassword == $request->securityConfirmNewPassword)
      {
        $user->password = Hash::make($request->securityNewPassword);
        $user->save();
        return redirect('logout');
      }
    }
    return redirect('security');
  }
}
