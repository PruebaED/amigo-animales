<!doctype html>
@if ($animal->state == 'disponible')
<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Acoge a {{ $animal->name }} - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="../css/foster.css">
		
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

      <!-- Información acerca de la acogida -->
      <section class="row">
        <div class="col-10 offset-1"> 
          <h1 class="text-center mt-5 mb-5"> Acogida de {{ $animal->name }} </h1> 
          <hr>
          <p class="justificado"> <strong> Una casa de acogida </strong> es un hogar temporal que se ofrece, desinteresadamente, a animales que han sido previamente
          abandonados. El tiempo de acogida puede variar dependiendo de diversas circunstancias. </p>
          <p class="justificado"> <strong> Adoptar un animal </strong> debe ser una unión para toda la vida, y puede ser que en el momento en que te encuentras no
          puedas comprometerte tan a largo plazo  (puedes estar pendiente de un traslado a otro país, puede que vayas a empezar un trabajo nuevo dentro de unos meses...). 
          </p>
          <p class="justificado"> En caso de acoger a un <strong> animal de los catalogados como potencialmente peligroso</strong>, deberá proveerse
          de la correspondiente licencia administrativa que acredita la posesión de dicho animales. Pulse <a class="link-detalle" href="/animals-pd">aquí</a> para
          obtener más información. </p>
        </div>
        <div class="col-10 offset-1 mt-3"> 
          <p class="justificado"> Algunas de las ventajas para la casa de acogida son: </p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>Puede ser tu primera toma de contacto con un animal antes de animarte a tener uno definitivamente. Si no estás seguro de adoptar, podrás 
                comprobar por experiencia si realmente quieres y puedes tener un peludito en casa</span></li>
                <li><span>Vivir la experiencia de sentir el amor y la compañía de un animal, sin tener que comprometerse de por vida</span></li>
                <li><span>Sentirte útil al ayudar a un ser vivo que de otro modo estaría en la calle</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-10 offset-1 mt-3"> 
          <p class="justificado"> Algunas de las ventajas para el animal son: </p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>Tendrá la oportunidad de vivir en una casa, en vez de en una jaula</span></li>
                <li><span>En una casa tendrá más paz y tranquilidad, más contacto con las personas y la oportunidad de socializarse y crecer o recuperarse rodeado
                de amor</span></li>
                <li><span>Hay muchas casas de acogida que se acaban "enamorando" del animal al que ofrecieron su hogar y lo adoptan ya para siempre. Así que este
                formato de voluntariado sirve como "presentación" entre humano y animal</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- ... -->

      <!-- Formulario de acogida -->
      <section>
        <form method="POST">
          @csrf
  
          <div class="row mb-4">
            <div class="col-10 offset-1 mt-3 mb-3">
              <p class="parrafo"> Si desea continuar con el proceso de acogida, revise los datos que se le muestran a continuación y acepte los acuerdos de responsabilidad. </p>
            </div>
          </div>
  
          <div class="row">
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-xl-2 mb-5">
              <div class="inputBox">
                <input type="text" name="fosterName" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->name }}"
                @endif
                >
                <span class="text">Nombre</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-md-2 mb-5">
              <div class="inputBox">
                <input type="text" name="fosterSurnames" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->surnames }}"
                @endif
                >
                <span class="text">Apellidos</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-xl-2 mb-5">
              <div class="inputBox">
                <input type="text" name="fosterEmail" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->email }}"
                @endif
                >
                <span class="text">Email</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-md-2 mb-5">
              <div class="inputBox">
                <input type="text" name="fosterProvince" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->userProvince->name }}"
                @endif
                >
                <span class="text">Población</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-md-1 offset-xl-2 mb-5">
              <div class="inputBox">
                <input type="text" name="fosterPhone" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->phone }}"
                @endif
                >
                <span class="text">Teléfono</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-md-2 mb-5">
              <div class="inputBox">
                <input type="text" name="fosterAnimalName" required="required" value="{{ $animal->name }}">
                <span class="text">Nombre del animal</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="fosterAgreementOne"> 
                <input class="form-check-input" type="checkbox" name="fosterAgreementOne" id="fosterAgreementOne" required> 
                He sido informado/a correctamente acerca de lo que supone la acogida de un animal. 
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="fosterAgreementTwo"> 
                <input class="form-check-input" type="checkbox" name="fosterAgreementTwo" id="fosterAgreementTwo" required> 
                Soy consciente de la responsibilidad que supone tener un animal a mi cuidado. 
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="fosterAgreementThree"> 
                <input class="form-check-input" type="checkbox" name="fosterAgreementThree" id="fosterAgreementThree" required> 
                Afirmo disponer de una casa en propiedad. En caso de estar alquilado/a, afirmo disponer del permiso
                necesario para poder alojar un animal en la vivienda. 
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="fosterAgreementFour"> 
                <input class="form-check-input" type="checkbox" name="fosterAgreementFour" id="fosterAgreementFour" required> 
                Afirmo disponer del tiempo necesario para proporcionar al animal unos cuidados correctos, incluyendo
                los correspondientes paseos diarios (en que caso de acoger a un perro).
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="fosterAgreementFive"> 
                <input class="form-check-input" type="checkbox" name="fosterAgreementFive" id="fosterAgreementFive" required> 
                Soy consciente que el animal puede ocasionar algún destrozo en la vivienda, derivado de posibles traumas
                y/o problemas de comportamiento.
              </label>
            </div>
          </div>
          <div class="row">
            <div class="text-center col-10 offset-1 mt-3">
              <input type="submit" name="fosterSubmit" value="Enviar">
            </div>
          </div>
        </form>
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