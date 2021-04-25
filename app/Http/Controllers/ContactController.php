<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
