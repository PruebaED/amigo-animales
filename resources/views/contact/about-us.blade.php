<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->
    
    <title>Acerca de nosotros - El Amigo de los Animales</title>
    
		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="../images/icono.ico">

		<link rel="STYLESHEET" type="text/css" href="../css/about-us.css">
		
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
      <!-- Bienvenida -->
      <div class="row">
				<div class="col-12 bienvenida">
					<div class="row">
            <div class="col-0 col-lg-1"></div>
						<div class="col-8 col-lg-3 offset-2 offset-lg-0 mt-2 justificado"> 
							<p class="texto-bienvenida"><i>El Amigo de los animales</i> le da la bienvenida. Esperemos que disfrute de la estancia.</p>
							<p class="text-center subtexto-bienvenida">¡Gracias por visitarnos!</p>
						</div>
					</div>
				</div>
			</div>
      <!-- ... -->

      <!-- Navbar -->
      @include('partials.navbar')
      <!-- ... -->

      <!-- Scroll to top button -->
      @include('utilities.scroll-to-top')
      <!-- ... -->

      <!-- Acerca de nosotros -->
      <section class="row mt-5">
        <div class="col-10 offset-1 mt-5 about-section">
          <!-- Mensaje de éxito tras loguearse correctamente -->
          @if (session('success')) @include('utilities.form-success') @endif
          <!-- ... --> 
          <div class="inner-container">
              <h1 class="text-center mb-5"> Acerca de nosotros </h1> 
              <hr>
              <p class="justificado">
                Año 2016. Tres amigos, amantes de los peludos, quieren emprender. Se dan cuenta que todas las páginas de adopciones
                de animales tienen tres gran defectos: la falta de asistencia técnica, su diseño y la no presencia del personal
                sanitario animal necesario. Por ello, deciden formarse durante cinco años en sus respectivas ramas. El trabajo constante culmina a principios de 2021 en la página web de adopciones 'El Amigo de los Animales'.
              </p>
          </div>
        </div>
        <div class="col-10 mt-5 offset-1"> 
          <h1 class="text-center mb-5"> Nuestro equipo </h1> 
          <hr>
        </div>
      </section>
      <section class="row">
        <div class="container">
          <div class="card">
            <div class="content">
              <div class="imgBx"><img src="../images/about-us/nuestroequipo1.jpg"></div>
              <div class="contentBx">
                <h3>Ezekixl Akinnewu<br><span>Full Stack Developer</span></h3>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="content">
              <div class="imgBx"><img src="../images/about-us/nuestroequipo2.jpg"></div>
              <div class="contentBx">
                <h3>Kindle Shulpina<br><span>Technical Assistant</span></h3>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="content">
              <div class="imgBx"><img src="../images/about-us/nuestroequipo3.jpg"></div>
              <div class="contentBx">
                <h3>Andrea Piacquadio<br><span>Veterinary Surgeon</span></h3>
              </div>
            </div>
          </div>
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