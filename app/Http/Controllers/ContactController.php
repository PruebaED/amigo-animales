<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function about_us()
  {
		return view('contact.about-us');
  }

  public function contact_form()
  {
		return view('contact.contact-form');
  }

  public function contact_information()
  {
		return view('contact.contact-information');
  }
}
