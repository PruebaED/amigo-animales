<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>Hola, {{ $user->name }} {{ $user->surnames }}. Ha recibido este correo electrónico porque se ha solicitado un restablecimiento de contraseña para la cuenta asociada al email '{{ $user->email }}'.</p>
  <p>
  	Haga click en el siguiente 
  	<strong>
      <a href="https://amigo-animales.herokuapp.com/password/reset/{{ $user->remember_token }}"> enlace</a>
    </strong>
  	para reestablecer su contraseña
  </p>
  <p>Si Vd. no ha solicitado un restablecimiento de contraseña, no es necesario que realice ninguna acción.</p>
  <p>Le recordamos que nuestro equipo está a su entera disposición. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>