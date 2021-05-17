<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que su petición de acogida ha sido procesada con éxito.</p>
  <p>A partir de este momento, Vd. tiene en acogida a {{ $animal->name }} y es el/la encargado/a de su cuidado y bienestar.</p>
  <p>
    En el momento en el que considere que no se puede hacer cargo de {{ $animal->name }}, le rogamos lo comunique a 'El Amigo de los animales.
  </p>
  <p>Le recordamos que nuestro equipo está a su entera disposición. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>