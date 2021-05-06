<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;
use Illuminate\Support\Facades\Schema;


class AnimalsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	self::seedAnimals();
  	$this->command->info('AnimalsTableSeeder inicializado con éxito');
  }

  private static function seedAnimals()
  {
  	Schema::disableForeignKeyConstraints();

  	Animal::truncate();

  	Schema::enableForeignKeyConstraints();

  	foreach(self::$animals as $animal) {
  		$a = new Animal;
  		$a->name = $animal['name'];
  		$a->age = $animal['age'];
  		$a->gender = $animal['gender'];
  		$a->breed = $animal['breed'];
  		$a->weight = $animal['weight'];
  		$a->date = $animal['date'];
  		$a->image = $animal['image'];
  		$a->state = $animal['state'];
  		$a->description = $animal['description'];
  		$a->vaccinated = $animal['vaccinated'];
  		$a->healthy = $animal['healthy'];
  		$a->sterilize = $animal['sterilize'];
  		$a->castrated = $animal['castrated'];
  		$a->dewormed = $animal['dewormed'];
  		$a->microchip = $animal['microchip'];
  		$a->user_id = $animal['user_id'];
  		$a->province_id = $animal['province_id'];
  		$a->save();
  	}
  }

  private static $animals = array(
  	array(
  		'name' => 'Pepe',
  		'age' => 5,
  		'gender' => 'Macho',
  		'breed' => 'Mestizo',
  		'weight' => 20.4,
  		'date' => '2020-09-15',
  		'image' => 'https://www.animalesomnivoros.es/wp-content/uploads/2020/08/comida-casera-perros-proteinas.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Pepe es un perrito muy cariñoso y activo, por lo que necesita una familia que lo ayude a quemar toda su     energía. Con la gente es extremadamente cariñoso, pero tiene tanta fuerza que a veces no la controla y es demasiado bruto en sus saludos. Con otros perros se lleva bien, aunque con la comida es algo dominante. Ahora mismo comparte jaula con un macho más dominante que él y conviven sin problema.',
  		'vaccinated' => true, 
  		'healthy' => false,
  		'sterilize' => false,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 1,
  		'province_id' => 25
  	),
  	array(
  		'name' => 'Kira',
  		'age' => 4,
  		'gender' => 'Hembra',
  		'breed' => 'Chow Chow',
  		'weight' => 32,
  		'date' => '2019-02-22',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/puppy-kim-chance.jpg',
  		'state' => 'disponible',
  		'description' => 'Tiene dos años y fue abandonada con tan solo un par de meses en un carril donde podría haber sido atropellada. La encontramos junto con su hermana escondidas en una tubería con muchísimo miedo. Su hermana fue adoptada pero ella no corrió la misma suerte y por eso, dos años después Kira sigue esperando a su familia.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 2,
  		'province_id' => 46
  	),
  	array(
  		'name' => 'Luna',
  		'age' => 3,
  		'gender' => 'Hembra',
  		'breed' => 'Scottish Fold',
  		'weight' => 3,
  		'date' => '2020-05-01',
  		'image' => 'https://static.vecteezy.com/system/resources/thumbnails/001/978/095/small_2x/close-up-of-a-tabby-cat-on-a-blue-surface-free-photo.jpg',
  		'state' => 'disponible',
  		'description' => 'Luna fue recogida de la calle en muy malas condiciones. Estaba refugiándose debajo de un coche. Solo mirarle a los ojos se ve lo noble y tierna que es. Busca el contacto y la caricia constantemente. Actualmente está en una casa de acogida a la espera de una buena familia que la adopte.',
  		'vaccinated' => false,
  		'healthy' => false,
  		'sterilize' => false,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 4,
  		'province_id' => 1
  	),
  	array(
  		'name' => 'Lola',
  		'age' => 8,
  		'gender' => 'Hembra',
  		'breed' => 'Mestizo',
  		'weight' => 8.2,
  		'date' => '2017-01-04',
  		'image' => 'https://emailtuna.com/images/newsletter/6d5/6d5a95888c541086c1430f5f78090b41.jpeg',
  		'state' => 'desaparecido',
  		'description' => 'Soy Lola tengo 8 años, fui sacada de la perrera por riesgo de sacrificio porque su "familia" lo cedió. Soy sociable con machos y hembras, activa, obediente y muy cariñosa.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 5,
  		'province_id' => 5
  	),
  	array(
  		'name' => 'Nala',
  		'age' => 6,
  		'gender' => 'Hembra',
  		'breed' => 'Mestizo',
  		'weight' => 25,
  		'date' => '2019-06-12',
  		'image' => 'https://image.jimcdn.com/app/cms/image/transf/dimension=1920x400:format=jpg/path/s7644c198ab2de778/image/icb888ffc915ceade/version/1599133919/image.jpg',
  		'state' => 'disponible',
  		'description' => 'Se lleva bien con personas, con los perros tiene un problema. Se necesita persona con experiencia, necesitaría más educación.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => false,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 5,
  		'province_id' => 26
  	),
  	array(
  		'name' => 'Coco',
  		'age' => 1,
  		'gender' => 'Macho',
  		'breed' => 'Golden Retriever',
  		'weight' => 40,
  		'date' => '2014-11-05',
  		'image' => 'https://farawaygoldens.files.wordpress.com/2008/09/img_4722.jpg?w=642',
  		'state' => 'disponible',
  		'description' => 'Fue encontrado en la calle al día siguiente de que fuera regalado por su propietario a un segundo propietario.',
  		'vaccinated' => false,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => false,
  		'microchip' => true,
  		'user_id' => 5,
  		'province_id' => 37
  	),
  	array(
  		'name' => 'Thor',
  		'age' => 6,
  		'gender' => 'Macho',
  		'breed' => 'Dóberman',
  		'weight' => 27,
  		'date' => '2018-10-09',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/6-dog-wanda-taylor.jpg',
  		'state' => 'disponible',
  		'description' => 'Thor ingresó al refugio siendo un bebé. Estuvo con bastantes recaídas, era un cachorrito débil hasta que salió adelante, se le consiguió una familia y después de 3 años volvió al refugio. Necesita una familia, es súper cariñoso.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 4,
  		'province_id' => 48
  	),
  	array(
  		'name' => 'Bimba',
  		'age' => 1,
  		'gender' => 'Macho',
  		'breed' => 'British Shorthair',
  		'weight' => 2.4,
  		'date' => '2021-03-19',
  		'image' => 'https://static.wixstatic.com/media/6c14cf_d843a540eba94a2cab2f03db1910561b~mv2.jpg/v1/crop/x_0,y_250,w_4032,h_2524/fill/w_639,h_400,al_c,q_80,usm_0.66_1.00_0.01/IMG-6615.webp',
  		'state' => 'disponible',
  		'description' => 'Bimba necesita una persona experimentada en esta raza, ya que por su pasado es una gata que no tuvo una buena sociabilizacion, pero a pesar de todo es muy fiel y cariñosa con los miembros que considera de su familia.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 3,
  		'province_id' => 4
  	),
  	array(
  		'name' => 'Max',
  		'age' => 2,
  		'gender' => 'Macho',
  		'breed' => 'Bóxer',
  		'weight' => 13.2,
  		'date' => '2020-12-17',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images-medium-large/im-bored-laura-grisham.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Max lleva desde los 6 meses en el refugio, nunca le han dado la oportunidad de estar en familia. Es un perro cariñoso, juguetón, inteligente y sociable con perros y personas. Sabe ir en correa y se porta genial.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 1,
  		'province_id' => 22
  	),
  	array(
  		'name' => 'Noa',
  		'age' => 9,
  		'gender' => 'Hembra',
  		'breed' => 'Eurasier',
  		'weight' => 68,
  		'date' => '2016-12-03',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/1-eurasier-louise-smith.jpg',
  		'state' => 'disponible',
  		'description' => 'Soy una perrita linda y cariñosa, convivo perfectamente con otros perritos y me gusta salir a tomar el sol y a caminar. He crecido desde los 2 meses de edad en el refugio.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 4,
  		'province_id' => 10
  	),
  	array(
  		'name' => 'Toby',
  		'age' => 11,
  		'gender' => 'Macho',
  		'breed' => 'Labrador Retriever',
  		'weight' => 22.1,
  		'date' => '2018-03-01',
  		'image' => 'https://image.jimcdn.com/app/cms/image/transf/dimension=1920x400:format=jpg/path/s2b3c4e13da9aae4c/image/i4e81d514bce55b0e/version/1431015864/image.jpg',
  		'state' => 'disponible',
  		'description' => 'Toby es un perro tranquilo, pero fuerte y con un poderoso porte. Un animal muy hermoso. Lleva poco con nosotros, pero sabemos que ya lleva mucho tiempo necesitando una familia. Algunas personas han intentado en numerosas ocasiones ayudarle pero él no se dejaba coger.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 4,
  		'province_id' => 13
  	),
  	array(
  		'name' => 'Rocky',
  		'age' => 12,
  		'gender' => 'Macho',
  		'breed' => 'Mestizo',
  		'weight' => 20.8,
  		'date' => '2010-04-05',
  		'image' => 'https://iheartdogs.com/wp-content/uploads/2018/06/olddog-e1530227539845.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Este abuelete de 12 años llegó hace unos años, rescatado de una perrera, gracias a su madrina. Rocky entró por segunda vez en esa perrera gracias a que cualquiera en este país puede tener perros de cualquier tipo. Después vienen los abandonos y el sufrimiento. Rocky es un perro feliz entre gente que le quiere y busca una familia que le dé ese amor en un hogar. Necesita del cariño, los paseos y seguir aprendiendo que la cercanía con sus amigos perrunos es positiva.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => false,
  		'user_id' => 2,
  		'province_id' => 11
  	),
  	array(
  		'name' => 'Chispa',
  		'age' => 2,
  		'gender' => 'Hembra',
  		'breed' => 'Común Europeo',
  		'weight' => 4.3,
  		'date' => '2020-09-02',
  		'image' => 'https://3.bp.blogspot.com/-op63DVA1eUY/V8JhAM9e7UI/AAAAAAAADfU/a2fHtAAJEXo2nCfNzMskia0UZV3-rKz2ACPcB/w640-h400/008%2B2.jpg',
  		'state' => 'disponible',
  		'description' => 'Recogida de la calle por aviso, en muy malas condiciones. Tenía un tumor el cuál hubo que estirar de urgencia. De la operación está totalmente recuperada. Ha dado positivo en Calicivirus.',
  		'vaccinated' => false,
  		'healthy' => false,
  		'sterilize' => false,
  		'castrated' => false,
  		'dewormed' => false,
  		'microchip' => false,
  		'user_id' => 2,
  		'province_id' => 29
  	),
  	array(
  		'name' => 'Canela',
  		'age' => 5,
  		'gender' => 'Hembra',
  		'breed' => 'Beagle',
  		'weight' => 12,
  		'date' => '2017-09-11',
  		'image' => 'https://cdn.frommfamily.com/StorePhotos/thumbs/6d9ef334-ce7c-4ea4-8956-1ca8fb930194.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Rescatada a las pocas semanas de vida junto a sus hermanos en un vertedero, fue dada en adopción. Después de tres años adoptada su familia no quiso seguir haciéndose cargo de él y la devolvió. Es buena con otros perros y con personas.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 3,
  		'province_id' => 13
  	),
  	array(
  		'name' => 'Chiqui',
  		'age' => 7,
  		'gender' => 'Hembra',
  		'breed' => 'Siberanio',
  		'weight' => 4,
  		'date' => '2019-11-24',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/1-siberian-cat-isolated-looking-up-michal-bednarek.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Esta gatita casera fue rescatada de la calle por un aviso de una vecina de Maracena, que nos decía que una gata callejera, no hacía más que intentar meterse en su casa. Al ver su carácter cariñoso la rescatamos, la publicamos y nadie la reclamó como suya, la habían abandonado.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => false,
  		'microchip' => false,
  		'user_id' => 5,
  		'province_id' => 35
  	),
  	array(
  		'name' => 'Zeus',
  		'age' => 5,
  		'gender' => 'Macho',
  		'breed' => 'American Pitbull Terrier',
  		'weight' => 26.7,
  		'date' => '2018-12-17',
  		'image' => 'https://www.adnsureste.info/wp-content/uploads/2016/11/perros-639x400.jpeg',
  		'state' => 'disponible',
  		'description' => 'Zeus empezó a tener problemas de comportamiento hacia otros perros y personas (según nos cuenta su familia) y decidieron darlo en adopción antes de probar otras vías. Zeus es un perro desconfiado que los últimos meses se ha visto abandonado en su casa por la que él creía que era su familia, por lo que necesita tiempo hasta que se acostumbrara a un nuevo hogar.',
  		'vaccinated' => false,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 1,
  		'province_id' => 10
  	),
  	array(
  		'name' => 'Dama',
  		'age' => 5,
  		'gender' => 'Hembra',
  		'breed' => 'Pallas',
  		'weight' => 3.3,
  		'date' => '2017-05-14',
  		'image' => 'https://parkingcan.files.wordpress.com/2015/06/perro_coche_ventanilla.jpg',
  		'state' => 'disponible',
  		'description' => 'Dama es hermana de Nami. Como podéis ver tiene una malformación de nacimiento cosa que no le impide hacer vida completamente normal, trepa a los árboles como el mejor. Dama es un amor de gatita, es sociable, aventurera y una innata cazadora que siempre deja regalos en la puerta para su mami de acogida.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => false,
  		'microchip' => false,
  		'user_id' => 1,
  		'province_id' => 14
  	),
  	array(
  		'name' => 'Rex',
  		'age' => 3,
  		'gender' => 'Macho',
  		'breed' => 'Ragdoll',
  		'weight' => 3.8,
  		'date' => '2019-07-02',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/37-cat-wilma-young.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Rescatamos a la madre y a los hermanos de Rex. Todos fueron adoptados excepto él, que años después sigue siendo un invisible del que nadie se fija.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => false,
  		'dewormed' => true,
  		'microchip' => false,
  		'user_id' => 3,
  		'province_id' => 44
  	),
  	array(
  		'name' => 'Milú',
  		'age' => 2,
  		'gender' => 'Macho',
  		'breed' => 'American Shorthair',
  		'weight' => 3.6,
  		'date' => '2021-08-04',
  		'image' => 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/2/cat-lying-on-bed-by-steve.jpg',
  		'state' => 'desaparecido',
  		'description' => 'Milú fue recogido de la calle. Es un gatito súper cariñoso y buenísimo que no entendemos como podía estar ahí, probablemente fue abandonado. Va a ser un gato especialmente grande y mimoso... todo un precioso peluche.',
  		'vaccinated' => true,
  		'healthy' => true,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 5,
  		'province_id' => 12
  	),
  	array(
  		'name' => 'Goofy',
  		'age' => 14,
  		'gender' => 'Macho',
  		'breed' => 'Border Collie',
  		'weight' => 8.5,
  		'date' => '2021-03-05',
  		'image' => 'https://pix.avax.news/avaxnews/b8/47/000547b8_medium.jpeg',
  		'state' => 'disponible',
  		'description' => 'Goofy va de casa de acogida en casa de acogida, en la última lleva algo más de dos años. Goofy es un perro alegre, divertido, cariño, muy cabezón también, pero eso también le hace encantador. Necesita una familia que tenga paciencia al principio, que le guste dar largos paseo, que salgan al campo, al rio, a la montaña y que le ofrezca juego y actividad.',
  		'vaccinated' => true,
  		'healthy' => false,
  		'sterilize' => true,
  		'castrated' => true,
  		'dewormed' => true,
  		'microchip' => true,
  		'user_id' => 4,
  		'province_id' => 2
  	)
  );
}
