<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Animales desaparecidos - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/missing-animals.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body>

    <div class="container-fluid">
      <!-- Navbar -->
      @include('partials.navbar')
      <!-- ... -->

      <!-- Animales desaparecidos -->
      <div class="row">
        <div class="col-10 offset-1"> 
          <h1 class="text-center mt-5 mb-5"> Animales desaparecidos </h1> 
          <hr>
        </div>
        <div class="col-10 offset-1">
          <p class="justificado">Si cree haber visto alguno de los animales desaparecidos y su dueño no respondiera a través de los medios facilitados, le rogamos que
          rellene el formulario de contacto del que dispone en esta web, indicando en el asunto de la consulta el nombre del animal desaparecido. Nuestro equipo hará
          el resto.
          </p>
          <div class="row mt-5">
            @foreach($missingAnimals as $key => $missingAnimal)
            <!-- col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4 mb-5 mb-lg-0 offset-sm-1 offset-md-2 offset-lg-0 offset-xl-1 -->
            <div class="col-md-6 col-xl-4 mb-5">
              <div class="card">
                <img class="w-100" src="{{ $missingAnimal->image }}">
                <div class="card-body">
                  <p class="justificado"><img class="icono" src="images/iconosAnimalesDesaparecidos/fecha.png">&nbsp;&nbsp;Desaparece a {{ $missingAnimal->date }}</p>
                  <p class="justificado"><img class="icono" src="images/iconosAnimalesDesaparecidos/lugar.png">&nbsp;&nbsp;Desaparece en {{ $missingAnimal->province_id }}</p>
                  <p class="justificado"><img class="icono" src="images/iconosAnimalesDesaparecidos/nombre.png">&nbsp;&nbsp;{{ $missingAnimal->name }}</p>
                  <p class="justificado"><img class="icono" src="images/iconosAnimalesDesaparecidos/raza.png">&nbsp;&nbsp;{{ $missingAnimal->breed }}</p>
                  <p class="justificado"><img class="icono" src="images/iconosAnimalesDesaparecidos/sexo.png">&nbsp;&nbsp;{{ $missingAnimal->gender }}</p>
                  <a class="btn">¿Me has visto? ¡Contacta al 968 70 79 32!</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- ... -->

        <!-- Footer -->
        @include('partials.footer')
        <!-- ... -->
      </div>
    </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

</html>