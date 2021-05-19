<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body>
  <p>
  	Hola, {{ $animalOwner->name }} {{ $animalOwner->surnames }}. Le comunicamos que {{ $userReport->name }} {{ $userReport->surnames }} ha reportado haber visto en {{ $animalViewedIn->name }} a su animal desaparecido, de nombre '{{ $animal->name }}', de raza '{{ $animal->breed }}' y de edad igual a '{{ $animal->age }} años'.
  </p>
  <p>
  	Le rogamos que se ponga en contacto de inmediato con {{ $userReport->name }} enviándole un correo electrónico a la dirección {{ $userReport->email }} o haciendo una llamada al {{ $userReport->phone }}.
  </p>
  <p>Deseamos profundamente que el animal avistado se trate de su mascota desaparecida y pueda, por fin, reencontrarse con ella.</p>
  <p>
  	Si necesita algún tipo de información extra a la proporcionada, nuestro equipo estará encantado de atenderle. ¡Esperamos que tenga un fantástico día!
  </p>
</body>
</html>