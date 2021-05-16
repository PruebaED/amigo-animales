<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = User::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {

    $faker = \Faker\Factory::create('es_ES');

    $firstSurname = $faker->lastName;
    $secondSurname = $faker->lastName;
    $uniqueFakeEmail = strtolower($firstSurname . $secondSurname . '@' . $faker->freeEmailDomain);
    $phoneNumber = $faker->unique()->tollFreeNumber;

    /* Quitamos los caracteres especiales de los fake email que vamos generando */
    //Reemplazamos la A y a
    $uniqueFakeEmail = str_replace(
      array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
      array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
      $uniqueFakeEmail
    );
 
    //Reemplazamos la E y e
    $uniqueFakeEmail = str_replace(
      array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
      array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
      $uniqueFakeEmail
    );
 
    //Reemplazamos la I y i
    $uniqueFakeEmail = str_replace(
      array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
      array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
      $uniqueFakeEmail 
    );
 
    //Reemplazamos la O y o
    $uniqueFakeEmail = str_replace(
      array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
      array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
      $uniqueFakeEmail 
    );
 
    //Reemplazamos la U y u
      $uniqueFakeEmail = str_replace(
      array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
      array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
      $uniqueFakeEmail 
    );
 
    //Reemplazamos la N, n, C y c
    $uniqueFakeEmail = str_replace(
      array('Ñ', 'ñ', 'Ç', 'ç'),
      array('N', 'n', 'C', 'c'),
      $uniqueFakeEmail
    );
    /* ... */

    /* Quitamos los espacios en blanco del número de teléfono */
    $phoneNumber = str_replace(' ', '', $phoneNumber);
    /* ... */

    return [
      'name' => $faker->firstName,
      'surnames' => $firstSurname . ' ' . $secondSurname,
      'email' => $uniqueFakeEmail,
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'phone' => $phoneNumber,
      'province_id' => $faker->numberBetween(1, 49)
    ];
  }
}