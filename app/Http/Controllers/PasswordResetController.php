<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\SendResetLinkEmailRequest;
use App\Http\Requests\PasswordResetSetted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;
use App\Mail\PasswordChanged;
use App\Mail\SendResetLink;

class PasswordResetController extends Controller
{
  public function getPasswordReset()
  {
    return view('password.password-reset');
  }

  public function postSendResetLinkEmail(SendResetLinkEmailRequest $request)
  {
  	$user = User::where('email', $request->passwordResetEmail)->firstOrFail();
  	$random_token = Str::random(60);
  	$user->remember_token = $random_token;
  	$user->save();
  	Mail::to($user->email)->send(new SendResetLink($user));
    return redirect('/login')->withSuccess('Se ha enviado el link de recuperación de contraseña satisfactoriamente.');
  }

  public function getSetPasswordReset($token)
  {
    return view('password.password-reset-setted',
      array(
        'token' => User::where('remember_token', $token)->firstOrFail()
      )
    );
  }

  public function postPasswordResetSetted(PasswordResetSetted $request, $token)
  {
  	$user = User::where('remember_token', $token)->firstOrFail();
    $errors = new MessageBag();
    if ($user->email == $request->passwordResetSettedEmail) {
	    if ($request->passwordResetSettedNewPassword == $request->passwordResetSettedConfirmNewPassword) {
	    	$user->password = Hash::make($request->passwordResetSettedConfirmNewPassword);
	    	$user->remember_token = NULL;
	    	$user->save();
        Mail::to($user->email)->send(new PasswordChanged($user));
    		return redirect('/login')->withSuccess('Ha restablecido su contraseña satisfactoriamente.');
	    } else {
	      $errors->add('incorrect_confirm_password_postPasswordResetSetted', 'La nueva contraseña y la confirmación de la nueva contraseña
	      no coinciden.');
	    }
    } else {
    	$errors->add('incorrect_email_postPasswordResetSetted', 'El email introducido y el email desde el cual se solicitó el reestablecimiento de la contraseña no coinciden.');
    }
    return redirect('password-reset/' . $token)->withInput()->withErrors($errors);
  }
}
