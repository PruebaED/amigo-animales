<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>
  	Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que su petición de publicación de su animal desaparecido ha sido procesada con éxito.
  </p>
  <p>A continuación, se le muestran los datos que hemos almacenado de su animal:</p>
  <ul>
    <li>Nombre: {{ $animal->name }}</li>
    <li>Género: {{ $animal->gender }}</li>
    <li>Raza: {{ $animal->breed }}</li>
    <li>Fecha de desaparición: {{ date("d/m/Y", strtotime($animal->date)) }}</li>
    <li>Imagen: {{ $animal->image }}</li>
    <li>Provincia: {{ $animal->provinceAnimal->name }}</li>
    <li>Dueño: {{ $user->name }} {{ $user->surnames }}</li>
  </ul>
  <p>Le recordamos que nuestro equipo está a su entera disposición. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>