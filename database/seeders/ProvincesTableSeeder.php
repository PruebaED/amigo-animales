<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;
use Illuminate\Support\Facades\Schema;

class ProvincesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	self::seedProvinces();
  	$this->command->info('ProvincesTableSeeder inicializado con éxito');
  }

  private static function seedProvinces()
  {
  	Schema::disableForeignKeyConstraints();

  	Province::truncate();

  	Schema::enableForeignKeyConstraints();

  	foreach(self::$provinces as $province) {
  		$p = new Province;
  		$p->name = $province;
  		$p->save();
  	}
  }

  private static $provinces = array(
  	'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Badajoz', 'Barcelona', 'Burgos', 'Cádiz',
  	'Cáceres', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'Cuenca', 'Girona', 'Granada', 
  	'Guadalajara', 'Guipúzcoa', 'Huelva', 'Huesca', 'Islas Baleares', 'Jaén', 'La Coruña', 'La Rioja', 
  	'Las Palmas', 'León', 'Lérida', 'Lugo', 'Madrid', 'Málaga', 'Murcia', 'Navarra', 'Orense', 'Palencia',
  	'Pontevedra', 'Salamanca', 'Santa Cruz de Tenerife', 'Segovia', 'Sevilla', 'Soria', 'Tarragona', 'Teruel', 
  	'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
  );
}
