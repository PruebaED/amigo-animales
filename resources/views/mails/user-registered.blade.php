<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>Hola, {{ $user->name }} {{ $user->surnames }}. Le comunicamos que su cuenta se ha creado satisfactoriamente.</p>
  <p>A continuación, se le muestran los datos empleados en el registro:</p>
  <ul>
    <li>Email: {{ $user->email }}</li>
    <li>Teléfono: {{ $user->phone }}</li>
    <li>Provincia: {{ $user->userProvince->name }}</li>
  </ul>
  <p>Le recordamos que nuestro equipo está a su entera disposición. ¡Esperamos que tenga un fantástico día!</p>
</body>
</html>