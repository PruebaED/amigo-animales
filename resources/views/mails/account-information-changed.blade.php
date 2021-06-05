<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que la información de su cuenta ha sido actualizada con éxito.</p>
  <p>A continuación, se le muestran los datos de los cuales 'El Amigo de los Animales' tiene registro:</p>
  <ul>
    <li>Nombre: {{ $user->name }}</li>
    <li>Apellidos: {{ $user->surnames }}</li>
    <li>Teléfono: {{ $user->phone }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Provincia: {{ $user->userProvince->name }}</li>
  </ul>
  <p>
    Tenga en que cuenta que si necesita cualquier otra cosa, nuestro equipo estará encantado de atenderle. ¡Esperamos que tenga un fantástico día!
  </p>
</body>
</html>