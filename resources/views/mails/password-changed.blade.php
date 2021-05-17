<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que su contraseña ha sido actualizada satisfactoriamente.</p>
  <p>
  	Por motivos de seguridad, 'El Amigo de los Animales' no puede incluir el contenido de su nueva contraseña en este correo electrónico.
  </p>
  <p>Recuerde que puede contactar con nosotros para cualquier cosa que necesite. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>