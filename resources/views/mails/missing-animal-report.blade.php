<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que su reporte de avistamiento ha sido procesado con éxito.</p>
  <p>
  	Hemos avisado de inmediato al dueño de {{ $animal->name }}, el cual se pondrá en contacto con Vd. con la mayor brevedad posible.
  </p>
  <p>Gracias por contribuir a la posible recuperación de un animal perdido.</p>
  <p>Si necesita cualquier cosa, nuestro equipo está a su entera disposición. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>