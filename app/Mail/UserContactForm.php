<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Http\Requests\ContactFormPostRequest;

class UserContactForm extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */

  public $user;
  public $request;

  public function __construct(User $user, ContactFormPostRequest $request)
  {
    $this->user = $user;
    $this->request = $request;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build(ContactFormPostRequest $request)
  {
    return $this->subject($request->contactFormQuery)
                ->view('mails.user-contact-form');
  }
}
