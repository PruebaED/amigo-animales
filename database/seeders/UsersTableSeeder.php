<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	self::seedUsers();
  	$this->command->info('UsersTableSeeder inicializado con éxito');
  }

  private static function seedUsers()
  {
  	User::factory(5)->create();
  }
}
