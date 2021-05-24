<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormPostRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserContactForm;

class ContactController extends Controller
{
  public function getAboutUs()
  {
		return view('contact.about-us');
  }

  public function getContactForm()
  {
		return view('contact.contact-form');
  }

  public function getContactInformation()
  {
		return view('contact.contact-information');
  }

  // Queda pendiente darle funcionalidad al formulario que envía el visitante o el usuario de la web.
  public function postContactForm(ContactFormPostRequest $request)
  {
    if (Auth::check()) {
	    $user = User::findOrFail(Auth::user()->user_id);
      Mail::to('soporteamigoanimales@gmail.com')->send(new UserContactForm($user, $request));
      return redirect('contact-form')->withSuccess('Su formulario se ha enviado de forma satisfactoria.');
  	}
  }
}
