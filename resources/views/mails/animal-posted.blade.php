<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>
  	Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que su petición de publicación de su animal ha sido procesada con éxito.
  </p>
  <p>A continuación, se le muestran los datos que hemos almacenado de su animal:</p>
  <ul>
    <li>Nombre: {{ $animal->name }}</li>
    <li>Edad: {{ $animal->age }}</li>
    <li>Género: {{ $animal->gender }}</li>
    <li>Raza: {{ $animal->breed }}</li>
    <li>Peso: {{ $animal->weight }}</li>
    <li>Imagen: {{ $animal->image }}</li>
    <li>Descripción: {{ $animal->description }}</li>
    <li>Vacunado: {{ ($animal->vaccinated == 1) ? 'Si':'No' }}</li>
    <li>Sano: {{ ($animal->healthy  == 1) ? 'Si':'No' }}</li>
    <li>Esterilizado: {{ ($animal->sterilize  == 1) ? 'Si':'No' }}</li>
    <li>Castrado: {{ ($animal->castrated  == 1) ? 'Si':'No' }}</li>
    <li>Desparasitado: {{ ($animal->dewormed  == 1) ? 'Si':'No' }}</li>
    <li>Microchip: {{ ($animal->microchip  == 1) ? 'Si':'No' }}</li>
    <li>Provincia: {{ $animal->provinceAnimal->name }}</li>
    <li>Dueño: {{ $user->name }} {{ $user->surnames }}</li>
  </ul>
  <p>Le recordamos que nuestro equipo está a su entera disposición. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>