<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>
    Buenas, soporte de 'El Amigo de los Animales'. Soy {{ $user->name }} {{ $user->surnames }} y les escribo con el objetivo de obtener una consulta acerca de: '{{ $request->contactFormQuery }}'.
  </p>
  <p>
    Ruego se pongan en contacto conmigo a través de mi dirección de correo electrónica '{{ $user->email }}' o través del siguiente número de teléfono '{{ $request->contactFormPhone }}', el cual les proporcioné en el formulario de contacto.
  </p>
  <p>Gracias de antemano por su atención. ¡Espero que disfrute de un fantástico día!</p>
</body>
</html>