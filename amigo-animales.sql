#provinces
INSERT INTO provinces VALUES (1, 'Álava');
INSERT INTO provinces VALUES (2, 'Albacete');
INSERT INTO provinces VALUES (3, 'Alicante');
INSERT INTO provinces VALUES (4, 'Almería');
INSERT INTO provinces VALUES (5, 'Asturias');
INSERT INTO provinces VALUES (6, 'Badajoz');
INSERT INTO provinces VALUES (7, 'Barcelona');
INSERT INTO provinces VALUES (8, 'Burgos');
INSERT INTO provinces VALUES (9, 'Cáceres');
INSERT INTO provinces VALUES (10, 'Cádiz');
INSERT INTO provinces VALUES (11, 'Cantabria');
INSERT INTO provinces VALUES (12, 'Castellón');
INSERT INTO provinces VALUES (13, 'Ciudad Real');
INSERT INTO provinces VALUES (14, 'Córdoba');
INSERT INTO provinces VALUES (15, 'Cuenca');
INSERT INTO provinces VALUES (16, 'Girona');
INSERT INTO provinces VALUES (17, 'Granada');
INSERT INTO provinces VALUES (18, 'Guadalajara');
INSERT INTO provinces VALUES (19, 'Guipúzcoa');
INSERT INTO provinces VALUES (20, 'Huelva');
INSERT INTO provinces VALUES (21, 'Huesca');
INSERT INTO provinces VALUES (22, 'Islas Baleares');
INSERT INTO provinces VALUES (23, 'Jaén');
INSERT INTO provinces VALUES (24, 'La Coruña');
INSERT INTO provinces VALUES (25, 'La Rioja');
INSERT INTO provinces VALUES (26, 'Las Palmas');
INSERT INTO provinces VALUES (27, 'León');
INSERT INTO provinces VALUES (28, 'Lérida');
INSERT INTO provinces VALUES (29, 'Lugo');
INSERT INTO provinces VALUES (30, 'Madrid');
INSERT INTO provinces VALUES (31, 'Málaga');
INSERT INTO provinces VALUES (32, 'Murcia');
INSERT INTO provinces VALUES (33, 'Navarra');
INSERT INTO provinces VALUES (34, 'Orense');
INSERT INTO provinces VALUES (35, 'Palencia');
INSERT INTO provinces VALUES (36, 'Pontevedra');
INSERT INTO provinces VALUES (37, 'Salamanca');
INSERT INTO provinces VALUES (38, 'Santa Cruz de Tenerife');
INSERT INTO provinces VALUES (39, 'Segovia');
INSERT INTO provinces VALUES (40, 'Sevilla');
INSERT INTO provinces VALUES (41, 'Soria');
INSERT INTO provinces VALUES (42, 'Tarragona');
INSERT INTO provinces VALUES (43, 'Teruel');
INSERT INTO provinces VALUES (44, 'Toledo');
INSERT INTO provinces VALUES (45, 'Valencia');
INSERT INTO provinces VALUES (46, 'Valladolid');
INSERT INTO provinces VALUES (47, 'Vizcaya');
INSERT INTO provinces VALUES (48, 'Zamora');
INSERT INTO provinces VALUES (49, 'Zaragoza');

#users
INSERT INTO users VALUES (1, 'Guillermo', 'Gómez Sánchez', '5569136@alu.murciaeduca.es', 'guillermo123456', '699 12 34 56', 32);
INSERT INTO users VALUES (2, 'Lucía', ' Villalón Badía', '4298340@alu.murciaeduca.es', 'lucia123456', '650 91 68 63', 15);
INSERT INTO users VALUES (3, 'Juan', 'Sevilla Ferro', '2529732@alu.murciaeduca.es', 'juan123456', '628 92 35 45', 48);
INSERT INTO users VALUES (4, 'Isabel', 'Dorado Morente', '2040789@alu.murciaeduca.es', 'isabel123456', '601 37 22 42', 3);
INSERT INTO users VALUES (5, 'Pedro', 'Prieto Blasco', '3294750@alu.murciaeduca.es', 'pedro123456', '679 17 35 91', 22);
									
#animals
INSERT INTO animals VALUES (1, 'Pepe', 5, 'macho', 'Perro Mestizo', 20.4, '2020-09-15', 'https://www.animalesomnivoros.es/wp-content/uploads/2020/08/comida-casera-perros-proteinas.jpg', 'en adopcion', 'Pepe es un perrito muy cariñoso y activo, por lo que necesita una familia que lo ayude a quemar toda su energía. Con la gente es extremadamente cariñoso, pero tiene tanta fuerza que a veces no la controla y es demasiado bruto en sus saludos. Con otros perros se lleva bien, aunque con la comida es algo dominante. Ahora mismo comparte jaula con un macho más dominante que él y conviven sin problema.', true, false, false, false, true, true, 1, 25);
INSERT INTO animals VALUES (2, 'Kira', 4, 'hembra', 'Perro Chow Chow', 32, '2019-02-22', 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/puppy-kim-chance.jpg', 'en adopcion', 'Tiene dos años y fue abandonada con tan solo un par de meses en un carril donde podría haber sido atropellada. La encontramos junto con su hermana escondidas en una tubería con muchísimo miedo. Su hermana fue adoptada pero ella no corrió la misma suerte y por eso, dos años después Kira sigue esperando a su familia.', true, false, true, true, true, true, 2, 46);
INSERT INTO animals VALUES (3, 'Luna', 3, 'hembra', 'Gato Scottish Fold', 3, '2020-05-01', 'https://static.vecteezy.com/system/resources/thumbnails/001/978/095/small_2x/close-up-of-a-tabby-cat-on-a-blue-surface-free-photo.jpg', 'en acogida', 'Luna fue recogida de la calle en muy malas condiciones. Estaba refugiándose debajo de un coche. Solo mirarle a los ojos se ve lo noble y tierna que es. Busca el contacto y la caricia constantemente. Actualmente está en una casa de acogida a la espera de una buena familia que la adopte.', false, false, false, false, true, true, 4, 1);
INSERT INTO animals VALUES (4, 'Lola', 8, 'hembra', 'Perro Mestizo', 8.2, '2017-01-04', 'https://emailtuna.com/images/newsletter/6d5/6d5a95888c541086c1430f5f78090b41.jpeg', 'urgente', 'Soy Lola tengo 8 años, fui sacada de la perrera por riesgo de sacrificio porque su "familia" lo cedió. Soy sociable con machos y hembras, activa, obediente y muy cariñosa.', true, false, true, true, true, true, 5, 5);
INSERT INTO animals VALUES (5, 'Nala', 6, 'hembra', 'Perro Mestizo', 25, '2019-06-12', 'https://image.jimcdn.com/app/cms/image/transf/dimension=1920x400:format=jpg/path/s7644c198ab2de778/image/icb888ffc915ceade/version/1599133919/image.jpg', 'en adopcion', 'Se lleva bien con personas, con los perros tiene un problema. Se necesita persona con experiencia, necesitaría más educación.', true, true, false, false, true, true, 5, 26);
INSERT INTO animals VALUES (6, 'Coco', 1, 'macho', 'Perro Golden Retriever', 40, '2014-11-05', 'https://farawaygoldens.files.wordpress.com/2008/09/img_4722.jpg?w=642', 'en adopcion', 'Fue encontrado en la calle al día siguiente de que fuera regalado por su propietario a un segundo propietario.', false, false, false, true, false, true, 5, 37);
INSERT INTO animals VALUES (7, 'Thor', 6, 'macho', 'Perro Dóberman', 17, '2018-10-09', 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/6-dog-wanda-taylor.jpg', 'en adopcion', 'Thor ingresó al refugio siendo un bebé. Estuvo con bastantes recaídas, era un cachorrito débil hasta que salió adelante, se le consiguió una familia y después de 3 años volvió al refugio. Necesita una familia, es súper cariñoso', true, false, true, false, true, true, 4, 48);
INSERT INTO animals VALUES (8, 'Bimba', 1, 'macho', 'Gato British Shorthair', 2.4, '2021-03-19', 'https://static.wixstatic.com/media/6c14cf_d843a540eba94a2cab2f03db1910561b~mv2.jpg/v1/crop/x_0,y_250,w_4032,h_2524/fill/w_639,h_400,al_c,q_80,usm_0.66_1.00_0.01/IMG-6615.webp', 'en adopcion', 'Bimba necesita una persona experimentada en esta raza, ya que por su pasado es una gata que no tuvo una buena sociabilizacion, pero a pesar de todo es muy fiel y cariñosa con los miembros que considera de su familia', true, true, true, false, true, true, 3, 4);
INSERT INTO animals VALUES (9, 'Max', 2, 'macho', 'Perro Bóxer', 13.2, '2020-12-17', 'https://render.fineartamerica.com/images/images-profile-flow/400/images-medium-large/im-bored-laura-grisham.jpg', 'desaparecido', 'Max lleva desde los 6 meses en el refugio, nunca le han dado la oportunidad de estar en familia. Es un perro cariñoso, juguetón, inteligente y sociable con perros y personas. Sabe ir en correa y se porta genial.', true, true, true, false, true, true, 1, 22);
INSERT INTO animals VALUES (10, 'Noa', 9, 'hembra', 'Perro Eurasier', 68, '2016-12-03', 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/1-eurasier-louise-smith.jpg', 'en adopcion', 'Soy una perrita linda y cariñosa, convivo perfectamente con otros perritos y me gusta salir a tomar el sol y a caminar. He crecido desde los 2 meses de edad en el refugio.', true, true, true, true, true, true, 4, 10);
INSERT INTO animals VALUES (11, 'Toby', 11, 'macho', 'Perro Labrador Retriever', 22.1, '2018-03-01', 'https://image.jimcdn.com/app/cms/image/transf/dimension=1920x400:format=jpg/path/s2b3c4e13da9aae4c/image/i4e81d514bce55b0e/version/1431015864/image.jpg', 'en acogida', 'Toby es un perro tranquilo, pero fuerte y con un poderoso porte. Un animal muy hermoso. Lleva poco con nosotros, pero sabemos que ya lleva mucho tiempo necesitando una familia. Algunas personas han intentado en numerosas ocasiones ayudarle pero él no se dejaba coger,', true, false, true, false, true, true, 4, 13);
INSERT INTO animals VALUES (12, 'Rocky', 12, 'macho', 'Perro Mestizo', 20.8, '2010-04-05', 'https://iheartdogs.com/wp-content/uploads/2018/06/olddog-e1530227539845.jpg', 'en adopcion', 'Este abuelete de 12 años llegó hace unos años, rescatado de una perrera, gracias a su madrina. Rocky entró por segunda vez en esa perrera gracias a que cualquiera en este país puede tener perros de cualquier tipo. Después vienen los abandonos y el sufrimiento. Rocky es un perro feliz entre gente que le quiere y busca una familia que le dé ese amor en un hogar. Necesita del cariño, los paseos y seguir aprendiendo que la cercanía con sus amigos perrunos es positiva.', true, true, true, true, true, false, 2, 11);
INSERT INTO animals VALUES (13, 'Chispa', 2, 'hembra', 'Gato Común', 4.3, '2020-09-02', 'https://3.bp.blogspot.com/-op63DVA1eUY/V8JhAM9e7UI/AAAAAAAADfU/a2fHtAAJEXo2nCfNzMskia0UZV3-rKz2ACPcB/w640-h400/008%2B2.jpg', 'desaparecido', 'Recogida de la calle por aviso, en muy malas condiciones. Tenía un tumor el cuál hubo que estirar de urgencia. De la operación está totalmente recuperada. Ha dado positivo en Calicivirus.', false, false, false, false, false, false, 2, 29);
INSERT INTO animals VALUES (14, 'Canela', 5, 'hembra', 'Perro Beagle', 12, '2017-09-11', 'https://cdn.frommfamily.com/StorePhotos/thumbs/6d9ef334-ce7c-4ea4-8956-1ca8fb930194.jpg', 'desaparecido', 'Rescatada a las pocas semanas de vida junto a sus hermanos en un vertedero, fue dada en adopción. Después de tres años adoptada su familia no quiso seguir haciéndose cargo de él y la devolvió. Es buena con otros perros y con personas.', true, false, false, true, true, true, 3, 13);
INSERT INTO animals VALUES (15, 'Chiqui', 7, 'hembra', 'Gato Siberiano', 4, '2019-11-24', 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/1-siberian-cat-isolated-looking-up-michal-bednarek.jpg', 'desaparecido', 'Esta gatita casera fue rescatada de la calle por un aviso de una vecina de Maracena, que nos decía que una gata callejera, no hacía más que intentar meterse en su casa. Al ver su carácter cariñoso la rescatamos, la publicamos y nadie la reclamó como suya, la habían abandonado.', true, true, true, true, false, false, 5, 35);
INSERT INTO animals VALUES (16, 'Zeus', 5, 'macho', 'Perro American Pitbull Terrier', 26.7, '2018-12-17', 'https://www.adnsureste.info/wp-content/uploads/2016/11/perros-639x400.jpeg', 'en adopcion', 'Zeus empezó a tener problemas de comportamiento hacia otros perros y personas (según nos cuenta su familia) y decidieron darlo en adopción antes de probar otras vías. Zeus es un perro desconfiado que los últimos meses se ha visto abandonado en su casa por la que él creía que era su familia, por lo que necesita tiempo hasta que se acostumbrara a un nuevo hogar', false, false, false, true, true, true, 1, 10);
INSERT INTO animals VALUES (17, 'Dama', 5, 'hembra', 'Gato de Pallas', 3.3, '2017-05-14', 'https://parkingcan.files.wordpress.com/2015/06/perro_coche_ventanilla.jpg', 'en adopcion', 'Dama es hermana de Nami. Como podéis ver tiene una malformación de nacimiento cosa que no le impide hacer vida completamente normal, trepa a los árboles como el mejor. Dama es un amor de gatita, es sociable, aventurera y una innata cazadora que siempre deja regalos en la puerta para su mami de acogida.', true, false, true, true, false, false, 1, 14);
INSERT INTO animals VALUES (18, 'Rex', 3, 'macho', 'Gato Ragdoll', 3.8, '2019-07-02', 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/3/37-cat-wilma-young.jpg', 'urgente', 'Rescatamos a la madre y a los hermanos de Rex. Todos fueron adoptados excepto él, que años después sigue siendo un invisible del que nadie se fija', true, true, true, false, true, false, 3, 44);
INSERT INTO animals VALUES (19, 'Milú', 2, 'macho', 'Gato American Shorthair', 3.6, '2021-08-04', 'https://render.fineartamerica.com/images/images-profile-flow/400/images/artworkimages/mediumlarge/2/cat-lying-on-bed-by-steve.jpg', 'desaparecido', 'Milú fue recogido de la calle. Es un gatito súper cariñoso y buenísimo que no entendemos como podía estar ahí, probablemente fue abandonado. Va a ser un gato especialmente grande y mimoso... todo un precioso peluche', true, true, true, true, true, true, 5, 2);
INSERT INTO animals VALUES (20, 'Goofy', 14, 'macho', 'Perro Border Collie', 8.5, '2021-03-05', 'https://pix.avax.news/avaxnews/b8/47/000547b8_medium.jpeg', 'en acogida', 'Goofy va de casa de acogida en casa de acogida, en la última lleva algo más de dos años. Goofy es un perro alegre, divertido, cariño, muy cabezón también, pero eso también le hace encantador. Necesita una familia que tenga paciencia al principio, que le guste dar largos paseo, que salgan al campo, al rio, a la montaña y que le ofrezca juego y actividad.', true, false, true, true, true, true, 4, 2);