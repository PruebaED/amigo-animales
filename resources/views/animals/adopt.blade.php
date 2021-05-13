<!doctype html>
@if ($animal->state == 'disponible')
<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Adopta a {{ $animal->name }} - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<link rel="STYLESHEET" type="text/css" href="../css/adopt.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body class="{{ Session::get('theme') }}">

    <div class="container-fluid">
      <!-- Navbar -->
      @include('partials.navbar')
      <!-- ... -->

      <!-- Scroll to top button -->
      @include('utilities.scroll-to-top')
      <!-- ... -->

      <!-- Información acerca de la adopcion -->
      <section class="row">
        <div class="col-10 offset-1"> 
          <h1 class="text-center mt-5 mb-5"> Adopción de {{ $animal->name }} </h1> 
          <hr>
          <p class="justificado"> <strong> Traer un animal a tu vida </strong> a través de la adopción puede ser una oportunidad para salvar la vida de un animal que
          ha sido abandonado o maltratado, y puede ser una experiencia que mejorará tu vida. </p>
          <p class="justificado"> En 'El Amigo de los Animales' podrás encontrar animales de <strong> todas las razas y edades </strong> para su adopción. 
          </p>
          <p class="justificado"> En caso de adoptar a un <strong> animal de los catalogados como potencialmente peligroso</strong>, deberá proveerse
          de la correspondiente licencia administrativa que acredita la posesión de dicho animales. Pulse <a class="link-detalle" href="/animals-pd">aquí</a> para
          obtener más información. </p>
        </div>
        <div class="col-10 offset-1 mt-3"> 
          <p class="justificado"> Lo que debes saber para adoptar una mascota: </p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>'El Amigo de los Animales' tiene el derecho de no entregarle la mascota si no se cumplen los requisitos exigidos</span></li>
                <li><span>Se puede solicitar que la presentación o adopción del animal se realice en el domicilio en el que vivirá la mascota para conocer su futuro
                entorno</span></li>
                <li><span>Se realizará un seguimiento para ver qué tal se adapta la mascota a la familia y comprobar que se cumple el compromiso adquirido</span></li>
                <li><span>Si te encuentras un animal abandonado existe un plazo de tiempo que hay que esperar antes de poder adoptarlo oficialmente por si el dueño lo
                ha perdido y lo quiere reclamar</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-10 offset-1 mt-3"> 
          <p class="justificado"> Condiciones de entrega de los animales: </p>
          <div class="row mt-4">
            <div class="col-12 lista justificado">
              <ul>
                <li><span>Nuestros animales salen en adopción con la adecuada atención veterinaria, se informa del estado de salud del animal antes de la adopción y 
                se pondrá a disposición del adoptante toda la información que podamos aportar</span></li>
                <li><span>Todos los animales se adoptan con microchip identificativo, vacuna y desparasitación externa e interna. Por otro lado, se entregan con su
                correspondiente pasaporte</span></li>
                <li><span>Se establece una donación de 190€ para poder completar el proceso de adopción. Dicha cantidad se emplea para cubrir, de forma exclusiva,
                los gastos veterinarios y de alimentación generados por el animal. De esta forma, se cumplen con los requisitos exigidos por la ley para tener en
                regla a un animal de compañía</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- ... -->

      <!-- Formulario de adopción -->
      <section>
        <form method="POST">
          @csrf
  
          <div class="row mb-4">
            <div class="col-10 offset-1 mt-3 mb-3">
              <p class="parrafo">Si desea continuar con el proceso de adopción, revise los datos que se le muestran a continuación y acepte los acuerdos de responsabilidad. </p>
            </div>
          </div>
  
          <div class="row">
            <div class="col-10 col-md-4 col-xl-3 offset-1 offset-xl-2 mb-5">
              <div class="inputBox">
                <input type="text" name="adoptName" required="required"
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
                <input type="text" name="adoptSurnames" required="required"
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
                <input type="text" name="adoptEmail" required="required"
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
                <input type="text" name="adoptProvince" required="required"
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
                <input type="text" name="adoptPhone" required="required"
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
                <input type="text" name="adoptAnimalName" required="required" value="{{ $animal->name }}">
                <span class="text">Nombre del animal</span>
                <span class="line"></span>
              </div>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementOne"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementOne" id="adoptAgreementOne" required> 
                He sido informado correctamente acerca de lo que supone la adopción de un animal. 
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementTwo"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementTwo" id="adoptAgreementTwo" required> 
                Soy consciente de la responsibilidad que supone tener un animal a mi cuidado. 
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementThree"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementThree" id="adoptAgreementThree" required> 
                Afirmo disponer de una casa en propiedad. En caso de estar alquilado, afirmo disponer del permiso
                necesario para poder alojar un animal en la vivienda. 
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementFour"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementFour" id="adoptAgreementFour" required> 
                Afirmo disponer del tiempo necesario para proporcionar al animal unos cuidados correctos, incluyendo
                los correspondientes paseos diarios (en que caso de acoger a un perro).
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementFive"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementFive" id="adoptAgreementFive" required> 
                Me comprometo a no destinar al animal a la cría o a la reproducción.
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementSix"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementSix" id="adoptAgreementSix" required> 
                Me comprometo a notificar a 'El Amigo de los Animales' cualquier cambio producido respecto al estado
                del animal (desaparición, robo, defunción...).
              </label>
            </div>
            <div class="col-10 offset-1">
              <label class="form-check-label mb-4 justificado" for="adoptAgreementSeven"> 
                <input class="form-check-input" type="checkbox" name="adoptAgreementSeven" id="adoptAgreementSeven" required> 
                Soy consciente que el animal puede ocasionar algún destrozo en la vivienda, derivado de posibles traumas
                y/o problemas de comportamiento.
              </label>
            </div>
          </div>
          <div class="row">
            <div class="text-center col-10 offset-1 mt-3">
              <input type="submit" name="adoptSubmit" value="Enviar">
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