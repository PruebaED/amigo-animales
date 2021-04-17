<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/deliver.css">
		
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

      <!-- Entrega -->
      <section class="row">
        <div class="col-10 offset-1"> 
          <h1 class="text-center mt-5 mb-5"> Entrega de un animal </h1> 
          <hr>
          <p class="justificado">En el Centro se acogen para la adopción o eutanasia los perros de los ciudadanos del municipio de Cartagena que no puedan seguir 
          ejerciendo su propiedad responsable. <strong>No se aceptan animales que procedan de otros términos municipales.</strong></p>
          <p class="justificado">Para entregar un animal en el Centro, el propietario debe acudir a las oficinas del mismo con <strong>CITA PREVIA</strong> (llamando 
          al 968-321-200) para realizar la tramitación correspondiente.</p>
          <p class="justificado">Es igualmente de obligado cumplimiento el comunicar al censo las bajas por muerte o desaparición del animal así como los cambios de 
          propietario.</p>
        </div>
        <div class="col-10 mt-xl-0 offset-1"> 
          <p class="justificado">Los documentos que hay que aportar son:</p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>Fotocopia del D.N.I.</span></li>
                <li><span>Cartilla sanitaria del animal y de cuantos documentos relativos a tratamientos por él recibidos se disponga.</span></li>
                <li><span>Recibo de liquidación de la tasa correspondiente en el Ayuntamiento de Cartagena.</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-10 mt-4 offset-1"> 
          <p class="justificado">Si lo que se solicita es la eutanasia del animal, se debe justificar además el motivo y consultar en CATAD cuándo se puede realizar
          la entrega. Si además desea llevar a cabo la cremación en el centro, deberá abonar la tasa correspondiente a ésta. Por el momento no está disponible el 
          servicio de conservación de cenizas.</p>
          <p class="justificado">La solicitud de recogida de un animal de un domicilio se puede solicitar por teléfono, sin que sea necesario desplazarse a CATAD. 
          En ese caso los documentos requeridos deben entregarse en el momento de la retirada.</p>
          <p class="justificado"><strong>AVISO IMPORTANTE: La presentación del justificante de pago de la tasa es preceptiva para la aceptación de cualquier animal
          en el Centro. No se hacen distinciones sobre si la persona que solicita la entrega es el propietario del animal o si por cualquier causa es solamente su
          poseedor temporal.</strong></p>
          <p class="justificado mt-4"> 
            <img class="icono mx-3" src="imagenes/pdf.png" alt=""> 
            <a class="link" href="descargables/entrega.pdf" target="_blank">Solicitud de entrega de animal</a>
          </p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" src="imagenes/pdf.png" alt=""> 
            <a class="link" href="descargables/rescate.pdf" target="_blank">Solicitud de rescate de animal</a>
          </p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" src="imagenes/pdf.png" alt=""> 
            <a class="link" href="descargables/retirada.pdf" target="_blank">Solicitud de retirada del domicilio</a>
          </p>
          <p class="justificado mt-5"> 
            <img class="icono mx-3" src="imagenes/pago.png" alt=""> 
            <a class="link" href="https://seguro.cartagena.es/sedeelectronica/tramites/detalleTramite.asp?codtramite=290" target="_blank">Formulario de autoliquidación</a>
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