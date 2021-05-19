<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Animal;
use App\Models\Province;

class MissingAnimalViewed extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */

  public $animalOwner;
  public $animal;
  public $userReport;
  public $animalViewedIn;

  public function __construct(User $animalOwner, Animal $animal, User $userReport, Province $animalViewedIn)
  {
    $this->animalOwner = $animalOwner;
    $this->animal = $animal;
    $this->userReport = $userReport;
    $this->animalViewedIn = $animalViewedIn;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject('Avistamiento de su animal')
                ->view('mails.missing-animal-viewed');
  }
}
