<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Datos de contacto - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="images/icono.ico">

		<link rel="STYLESHEET" type="text/css" href="css/contact-information.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body 
    @if (Auth::check()) class="{{ Auth::user()->theme }}" 
    @elseif (isset($_COOKIE['theme'])) class="{{ $_COOKIE['theme'] }}" 
    @endif
  >

    <div class="container-fluid">
      <!-- Navbar -->
      @include('partials.navbar')
      <!-- ... -->

      <!-- Scroll to top button -->
      @include('utilities.scroll-to-top')
      <!-- ... -->

      <!-- Datos de contacto -->
      <section class="row mt-5">
        <div class="col-10 offset-1">
          <!-- Mensaje de éxito tras loguearse correctamente -->
          @if (session('success')) @include('utilities.form-success') @endif
          <!-- ... -->
          <h1 class="text-center mb-5"> Datos de contacto </h1> 
          <hr>
          <p class="justificado mb-5"> Si desea ponerse en contacto de forma directa con nuestro equipo, le rogamos que use cualquiera de las siguientes formas  que se le 
          presentan a continuación. Dispone de tres procedimientos para llevar a cabo la comunicación: vía e-mail, vía teléfono o de forma presencial en nuestra oficina
          de Cartagena.
          </p>
        </div>
        <div class="card col-10 col-md-8 mb-5 offset-1 offset-md-2">
          <img class="card-icon" src="images/contact-information/email.png">
          <p>soporteamigoanimales@gmail.com</p>
        </div>
  
        <div class="card col-10 col-md-8 mb-5 offset-1 offset-md-2">
          <img class="card-icon" src="images/contact-information/telefono.png">
          <p>+34 123 456 789</p>
        </div>
  
        <div class="card col-10 col-md-8 offset-1 offset-md-2">
          <img class="card-icon" src="images/contact-information/localizacion.png">
          <p>Calle Inventada, Nº23</p>
        </div>
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