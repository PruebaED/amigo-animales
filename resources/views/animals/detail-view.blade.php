<!doctype html>
@if ($animal->state == 'disponible')
<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>{{ $animal->name }} - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="../css/detail-view.css">
		
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

      <!-- Scroll to top button -->
      @include('utilities.scroll-to-top')
      <!-- ... -->

      <!-- Vista detalle animal -->
      <section class="row">
        <div class="col-12"> <h1 class="text-center mt-5 mb-5">{{ $animal->name }}</h1></div>
        <div class="col-10 col-lg-4 offset-1"> <img class="w-100 mt-lg-3 mt-xl-0" src="{{ $animal->image }}"></div>
        <div class="col-10 col-lg-5 offset-1 offset-md-2 offset-lg-1 mt-5 mb-5 mt-lg-0 mt-xl-2 justificado">
            <div class="row mb-3">
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/edad.png">{{ $animal->age }} años</div>
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/ubicacion.png">{{ $animal->provinceAnimal->name }}</div>
            </div>
            <div class="row mb-3">
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/sexo.png">{{ $animal->gender }}</div>
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/peso.png">{{ $animal->weight }}kg</div>
            </div>
            <div class="row mb-3">
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/vacunado.png">
                Vacunado: @if($animal->vaccinated) Si @else No @endif
              </div>
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/sano.png">
                Sano: @if($animal->healthy) Si @else No @endif
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/esterilizado.png">
                Esterilizado: @if($animal->sterilize) Si @else No @endif
              </div>
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/castrado.png">
                Castrado: @if($animal->castrated) Si @else No @endif
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/desparasitado.png">
                Espulgado: @if($animal->dewormed) Si @else No @endif
              </div>
              <div class="col-6"><img class="icono mx-3" src="../images/iconosVistaDetalle/microchip.png">
                Microchip: @if($animal->microchip) Si @else No @endif
              </div>
            </div>
        </div>
        <div class="col-10 offset-1 justificado
          @if ($animal->state == 'disponible')
          mb-5
          @endif"
        > 
          <p>{{ $animal->description }}</p>
        </div>
        @if ($animal->state == 'disponible')
        <div class="col-10 col-lg-4 offset-1 justificado">
          <h5>¿Crees que encajo en tu vida? 
            <a class="link-detalle" href="{{ url('adopt/' . $animal->animal_id ) }}">¡Adóptame!</a>
          </h5>
        </div>
        <div class="col-10 col-lg-4 mt-5 mt-lg-0 offset-1 offset-lg-2 justificado">
          <h5>¿Quieres que hoy duerma fuera de la perrera?
            <a class="link-detalle" href="{{ url('foster/' . $animal->animal_id ) }}">¡Acógeme!</a>
          </h5>
        </div>
        @endif
      </section>              
      <!-- ... -->

      <!-- Footer -->
      @include('partials.footer')
      <!-- ... -->
    </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

</html>
@else
<script>window.location = "/#adopcion";</script>
@endif