<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

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
    Schema::disableForeignKeyConstraints();

    User::truncate();

    Schema::enableForeignKeyConstraints();

    foreach(self::$users as $user) {
      $u = new User;
      $u->name = $user['name'];
      $u->surnames = $user['surnames'];
      $u->email = $user['email'];
      $u->password = $user['password'];
      $u->phone = $user['phone'];
      $u->province_id = $user['province_id'];
      $u->save();
    }

  	User::factory(5)->create();
  }

  private static $users = array(
    array(
      'name' => 'Guillermo',
      'surnames' => 'Gómez Sánchez',
      'email' => 'ggs2000@hotmail.es',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'phone' => '687203546',
      'province_id' => 32
    ),
    array(
      'name' => 'William',
      'surnames' => 'Shakespeare',
      'email' => 'guillelg.l.fino@gmail.com',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'phone' => '625709132',
      'province_id' => 11
    )
  );
}
