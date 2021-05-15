<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Normativa - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/regulations.css">
		
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

      <!-- Normativa -->
      <section class="row">
        <div class="col-10 col-xl-4 offset-1"> 
          <h1 class="text-center mt-5 mb-5"> Normativa municipal </h1> 
          <hr>
          <p class="justificado">La inclusión en el registro es <strong>OBLIGATORIA</strong> para aquellos perros y gatos mayores de tres meses que residan en el Término
          Municipal de Cartagena. El plazo para hacerlo es de un mes desde su adquisición, suponiendo la tenencia de animales no censados una infracción de la Ordenanza 
          Municipal, que puede conllevar el pago de una sanción.</p>
          <p class="justificado">La inscripción es <strong>GRATUITA</strong>, presentando el DNI del propietario y la cartilla sanitaria del animal con el microchip.</p>
          <p class="justificado">Es igualmente de obligado cumplimiento el comunicar al censo las bajas por muerte o desaparición del animal así como los cambios de 
          propietario.</p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" 
              @if (Auth::check() && Auth::user()->theme == 'dark')
                src="images/pdf-white.png"
              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                src="images/pdf-white.png"
              @else
                src="images/pdf.png"
              @endif
              alt=""
            >
            <a class="link" href="downloadables/municipal-ordinance.pdf" target="_blank">Ordenanza municipal</a>
          </p>
        </div>
        <div class="col-10 col-xl-4 offset-1 offset-xl-2"> 
          <h1 class="text-center mt-5 mb-5"> Normativa estatal </h1> 
          <hr>
          <p class="justificado"> 
            <img class="icono mx-3" 
              @if (Auth::check() && Auth::user()->theme == 'dark')
                src="images/pdf-white.png"
              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                src="images/pdf-white.png"
              @else
                src="images/pdf.png"
              @endif
              alt=""
            >
            <a class="link" href="downloadables/state-ordinance1.pdf" target="_blank">Ley 10/1990</a>
          </p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" 
              @if (Auth::check() && Auth::user()->theme == 'dark')
                src="images/pdf-white.png"
              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                src="images/pdf-white.png"
              @else
                src="images/pdf.png"
              @endif
              alt=""
            >
            <a class="link" href="downloadables/state-ordinance2.pdf" target="_blank">Ley 50/1999</a>
          </p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" 
              @if (Auth::check() && Auth::user()->theme == 'dark')
                src="images/pdf-white.png"
              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                src="images/pdf-white.png"
              @else
                src="images/pdf.png"
              @endif
              alt=""
            >
            <a class="link" href="downloadables/state-ordinance3.pdf" target="_blank">R.D. 287/2002</a>
          </p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" 
              @if (Auth::check() && Auth::user()->theme == 'dark')
                src="images/pdf-white.png"
              @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                src="images/pdf-white.png"
              @else
                src="images/pdf.png"
              @endif
              alt=""
            >
            <a class="link" href="downloadables/state-ordinance4.pdf" target="_blank">Orden 29/06/13</a>
          </p>
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