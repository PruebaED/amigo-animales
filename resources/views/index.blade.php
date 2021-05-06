<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/index.css">
    <link rel="STYLESHEET" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/toggle-elements.js"></script>

    <title> El Amigo de los Animales </title>

  </head>

  <body>

    <div class="container-fluid">

      <!-- PRESENTACIÓN PÁGINA -->
      <div class="row">
        <section class="col-12">
          <header>
            <a class="logo">Lealtad.</a>
            <div class="toggle"></div>
          </header>
          <div class="glass"></div>
          <div class="content">
            <h2><span>No vamos a cambiar el mundo ayudando a un animal, pero al menos el mundo habrá cambiado para él.</span></h2>
          </div>
          <ul class="navigation">
            <li style="--i:1;"><a href="/">Inicio</a></li>
            <li style="--i:2;"><a href="#adopcion">Adopción</a></li>
            <li style="--i:3;"><a href="/deliver">Entrega</a></li>
            <li style="--i:4;"><a href="/rescue">Rescate</a></li>
            <li style="--i:5;"><a href="/missing-animals">Animales desaparecidos</a></li>
            <li style="--i:6;"><a href="/regulations">Normativa</a></li>
            <li style="--i:7;"><a href="/animals-pd">Animales PPP</a></li>
            <li style="--i:8;"><a href="/contact-form">Contacto</a></li>
            <li style="--i:9;"><a href="/profile">Ajustes</a></li>
            <li style="--i:10;">
            @if (!Auth::check())
              <a href="/login">Iniciar sesión</a>
            @else
              <a href="/logout">Cerrar sesión</a>
            @endif
            </li>
          </ul>
          <video src="videos/video.mp4" autoplay muted loop></video>
        </section>
      </div>
      <!-- ... -->

      <!-- SECCIÓN ANIMALES -->
      <section class="row">
        <div id="adopcion" class="col-10"> 
          <h1 class="text-center mt-5 mb-5"> Animales en adopción </h1> 
          <hr class="mb-4">
        </div>
        @foreach($animalsToAdopt as $key => $animal) 
        <div class="col-md-10 col-lg-6 col-xl-4 mb-5">
          <div class="single-content">
            <img src="{{ $animal->image }}" alt="">
            <div class="text-content">
              <h5 class="mt-3 mb-2">{{ $animal->name }}</h5>
              <h5 class="mb-2">{{ $animal->breed }}</h5>
              <h5 class="mb-2">{{ $animal->provinceAnimal->name }}</h5>
              <button type="button" onclick="window.location.href='{{ url('detail-view/' . $animal->animal_id ) }}';" class="btn mt-3 mx-3">Más información</button>
            </div>
          </div>
        </div>
        @endforeach
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
