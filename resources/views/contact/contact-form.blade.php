<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Formulario de contacto - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/contact-form.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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

      <!-- Formulario de contacto -->
      <form method="POST">
        @csrf
        <div class="row mt-5 mb-5"> 
          <div class="col-10 offset-1">
            <!-- Errores producidos en el formulario -->
            @if (count($errors) > 0) @include('utilities.form-errors') @endif
            <!-- ... -->

            <!-- Mensaje de éxito tras loguearse correctamente o tras enviar el formulario de contacto correctamente -->
            @if (session('success')) @include('utilities.form-success') @endif
            <!-- ... -->
            <h1>Formulario de contacto</h1>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-8 offset-2">
            <p class="parrafo">Si desea que nuestro equipo le contacte, le rogamos que rellene los distintos campos que se presentan a continuación. 
              Nos pondremos en contacto con .Vd con la mayor brevedad posible.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-10 col-md-4 col-xl-3 offset-1 offset-xl-2 mb-5">
            <div class="inputBox">
              <input type="text" name="contactFormName"
              @if (Auth::check())
                value="{{ Auth::user()->name }}"
              @else
                value="{{ old('contactFormName') }}"
              @endif
              >
              <span class="text">Nombre</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col-10 col-md-4 col-xl-3 offset-1 offset-md-2 mb-5">
            <div class="inputBox">
              <input type="text" name="contactFormSurnames"
              @if (Auth::check())
                value="{{ Auth::user()->surnames }}"
              @else
                value="{{ old('contactFormSurnames') }}"
              @endif
              >
              <span class="text">Apellidos</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col-10 col-md-4 col-xl-3 offset-1 offset-xl-2 mb-5">
            <div class="inputBox">
              <input type="text" name="contactFormEmail"
              @if (Auth::check())
                value="{{ Auth::user()->email }}"
              @else
                value="{{ old('contactFormEmail') }}"
              @endif
              >
              <span class="text">Email</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col-10 col-md-4 col-xl-3 offset-1 offset-md-2 mb-5">
            <div class="inputBox">
              <input type="text" name="contactFormPhone"
              @if (Auth::check())
                value="{{ Auth::user()->phone }}"
              @else
                value="{{ old('contactFormPhone') }}"
              @endif
              >
              <span class="text">Teléfono</span>
              <span class="line"></span>
            </div>
          </div>
          <div class="col-10 col-xl-8 offset-1 offset-xl-2 mb-5">
            <div class="inputBox">
              <input type="text" name="contactFormQuery" value="{{ old('contactFormQuery') }}">
              <span class="text">Motivo de la consulta</span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="text-center col-10 offset-1">
            <input type="submit" name="contactFormSubmit" value="Enviar">
          </div>
        </div>
      </form>
      <!-- ... -->

      <!-- Footer -->
      @include('partials.footer')
      <!-- ... -->
    </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

</html>