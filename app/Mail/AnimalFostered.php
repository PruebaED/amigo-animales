<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Animal;

class AnimalFostered extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */

  public $user;
  public $animal;

  public function __construct(User $user, Animal $animal)
  {
    $this->user = $user;
    $this->animal = $animal;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject('Proceso de acogida finalizado')
                ->view('mails.animal-fostered');
  }
}
