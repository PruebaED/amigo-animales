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

  public function putAccount(Request $request)
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

  public function putAppearance()
  {

  }

  public function putProfile(Request $request)
  {
    $user = User::findOrFail(Auth::user()->user_id);
    $user->name = $request->profileName;
    $user->surnames = $request->profileSurnames;
    $user->email = $request->profileEmail;
    $user->password = Auth::user()->password;
    $user->phone = $request->profilePhone;
    $user->province_id = Auth::user()->province_id;
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
        $user->name = Auth::user()->name;
        $user->surnames = Auth::user()->surnames;
        $user->email = Auth::user()->email;
        $user->password = Hash::make($request->securityNewPassword);
        $user->phone = Auth::user()->phone;
        $user->province_id = Auth::user()->province_id;
        $user->save();
        return redirect('logout');
      }
    }
    return redirect('security');
  }
}
