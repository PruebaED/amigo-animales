<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/rescue.css">
		
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

      <!-- Rescate -->
      <section class="row">
        <div class="col-10 offset-1"> 
          <h1 class="text-center mt-5 mb-5">Recuperación de animales extraviados</h1> 
          <hr>
          <p class="justificado">Todos los animales que abandonan el Centro, tienen que hacerlo con los tratamientos mínimos obligatorios que exige la Normativa vigente,
          que para el caso de perros y gatos son: Vacunación antirrábica, identificación por microchip y desparasitación interna.</p>
        </div>
        <div class="col-10 mt-xl-0 offset-1"> 
          <p class="justificado">El propietario de un animal recogido por el Servicio debe aportar para su recuperación:</p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>Fotocopia de su D.N.I.</span></li>
                <li><span>Cartilla sanitaria del animal con el certificado de las vacunaciones obligatorias actualizadas y el número de microchip vigente.</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-10 mt-4 offset-1"> 
          <p class="justificado">Si el animal no tuviera alguno de los tratamientos obligatorios exigidos, estos se le impondrán en el mismo Centro en el momento de 
          su recuperación, siendo el precio de los mismos iguales que para el caso de las adopciones.</p>
          <p class="justificado">El propietario dispone de un plazo de catorce días desde el ingreso del animal en el centro para reclamarlo. En el caso de animales
          sin microchip, el plazo de retención es de cuatro días.</p>
          <p class="justificado">La estancia en el centro será costeada por el propietario. Consulte aquí las tarifas municipales por la custodia diaria:</p>
          <p class="justificado mt-4"> 
            <img class="icono mx-3" src="images/ordenanza.png" alt=""> 
            <a class="link" href="https://www.cartagena.es/ordenanzas_fiscales.asp" target="_blank">Ordenanzas Fiscales</a>
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