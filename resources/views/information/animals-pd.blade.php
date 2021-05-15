<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Animales PPP - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="css/animals-pd.css">
		
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
        <div class="col-10 offset-1"> 
          <h1 class="text-center mt-5 mb-5"> Tenencia de animales potencialmente peligrosos </h1> 
          <hr>
          <p class="justificado"> <strong> IMPORTANTE </strong> - En los casos en que un mismo animal clasificado como potencialmente peligroso sea conducido por 
          espacios públicos en distintas ocasiones, por personas diferentes, ello implica que cada una de esas personas debe necesariamente haber obtenido su
          licencia correspondiente.</p>
          <p class="justificado">Todo propietario de un animal catalogado como potencialmente peligroso según el anexo I y II de la Ordenanza Municipal está obligado
          a proveerse de la correspondiente licencia administrativa que acredita la posesión de dichos animales.</p>
        </div>
        <div class="col-10 offset-1">
          <p class="justificado">Los perros considerados potencialmente peligrosos son aquellos que pertenecen a una de las siguientes razas o a cruces de ellas:</p>
          <div class="row mt-5">
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/AkitaInu.jpg" alt="">
              <h2 class="text-center titulo">Akita Inu</h2>
            </div>
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/AmericanStaffordshireTerrier.jpg" alt="">
              <h2 class="text-center titulo">American Staffordshire Terrier</h2>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/DogoArgentino.jpg" alt="">
              <h2 class="text-center titulo">Dogo Argentino</h2>
            </div>
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/FilaBrasileño.jpg" alt="">
              <h2 class="text-center titulo">Fila Brasileño</h2>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/PitBullTerrier.jpg" alt="">
              <h2 class="text-center titulo">Pit Bull Terrier</h2>
            </div>
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/Rottweiler.jpg" alt="">
              <h2 class="text-center titulo">Rottweiler</h2>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-10 col-xl-3 mb-5 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/StaffordshireBullTerrier.jpg" alt="">
              <h2 class="text-center titulo">Staffordshire Bull Terrier</h2>
            </div>
            <div class="col-10 col-xl-3 offset-1 offset-xl-2 imagen">
              <img class="rounded-circle mb-3" src="images/animalesPPP/TosaInu.jpg" alt="">
              <h2 class="text-center titulo">Tosa Inu</h2>
            </div>
          </div>
        </div>
        <div class="col-10 mt-5 mt-xl-0 offset-1"> 
          <p class="justificado">Además, también serán considerados como perros potencialmente peligrosos todos aquellos que reúnan alguna o varias de las 
          características que se proceden a enumerar:</p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>Fuerte musculatura, aspecto poderoso, robusto, configuración atlética, agilidad, vigor y resistencia.</span></li>
                <li><span>Marcado carácter y gran valor.</span></li>
                <li><span>Pelo corto</span></li>
                <li><span>Perímetro torácico comprendido entre 60 y 80 centímetros, altura a la cruz entre 50 y 70 centímetros y peso superior a 20 Kg.</span></li>
                <li><span>Cabeza voluminosa, cuboide, robusta, con cráneo ancho y grande y mejillas musculosas y abombadas. Mandíbulas grandes y fuertes, boca robusta, 
                ancha y profunda.</span></li>
                <li><span>Cuello ancho, musculoso y corto.</span></li>
                <li><span>Pecho macizo, ancho, grande, profundo, costillas arqueadas, y lomo musculado y corto.</span></li>
                <li><span>Extremidades anteriores paralelas, rectas y robustas y extremidades posteriores muy musculosas, con patas relativamente largas formando un
                ángulo moderado.</span></li>
                <li><span>Aquellos que sin estar incluidos en los apartados anteriores, manifiesten un carácter marcadamente agresivo o que en el pasado hayan
                protagonizado agresiones a personas o a otros animales.</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-10 mt-4 offset-1"> 
          <p class="justificado">Las solicitudes para la obtención de la licencia se presentan en las oficinas del Centro Municipal de Acogida.</p>
          <p class="justificado">Junto a la solicitud se debe aportar fotocopia del DNI, certificado médico de capacidad física y aptitud psicológica, 
          declaración jurada según modelo expuesto en CATAD, certificado de penales de la persona que la solicita, fotografía tamaño carné, póliza del
          seguro del/los animales con una cobertura de responsabilidad civil no inferior a 120.000 Euros y justificante de pago del último recibo anual
          sellado por la entidad emisora, justificante de pago de la tasa municipal por la obtención de la Licencia de animales peligrosos y fotocopia
          de la cartilla del animal donde figure el número del microchip, las características del animal, así como las vacunaciones antirrábicas actualizadas.</p>
          <p class="justificado">Todos los documentos presentados deberán ser originales o fotocopias compulsadas. La compulsa de fotocopias para esta licencia 
          puede realizarse de forma gratuita en las oficinas de CATAD.</p>
          <p class="justificado"><strong>Registro</strong>: Para los propietarios de animales clasificados como potencialmente peligrosos, además de poseer la 
          correspondiente Licencia, es obligatorio incluir en el plazo de un mes a cuantos de estos posean en el Registro Municipal de Animales Peligrosos.</p>
          <p class="justificado mt-4"> Recuerde que debe realizar el pago de la correspondiente contribución:
            <a class="link" href="https://seguro.cartagena.es/sedeelectronica/tramites/detalleTramite.asp?codTramite=414" target="_blank">Tasa por expedición de licencia
            de tenencia de AAPPP</a>
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