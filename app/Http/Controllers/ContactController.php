<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormPostRequest;

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
    return redirect('contact-form')->withSuccess('Su formulario de contacto se ha enviado de forma satisfactoria.');
  }
}
