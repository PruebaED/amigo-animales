<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

    <title>Animales desaparecidos - El Amigo de los Animales</title>

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="../images/icono.ico">

		<link rel="STYLESHEET" type="text/css" href="../css/missing-animals.css">
		
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

      <!-- Animales desaparecidos -->
      <div class="row">
        <div class="col-10 offset-1">
          <!-- Mensaje de éxito tras loguearse correctamente -->
          @if (session('success')) @include('utilities.form-success') @endif
          <!-- ... --> 
          <!-- Errores producidos en el formulario de avistamiento de animal desaparecido -->
          @if (count($errors) > 0) @include('utilities.form-errors') @endif
          <!-- ... -->
          <h1 class="text-center mt-5 mb-5"> Animales desaparecidos </h1> 
          <hr>
        </div>
        <div class="col-10 offset-1">
          <p class="justificado">Si cree haber visto alguno de los animales desaparecidos y su dueño no respondiera a través de los medios facilitados, le rogamos que
          rellene el formulario de contacto del que dispone en esta web, indicando en el asunto de la consulta el nombre del animal desaparecido. Nuestro equipo hará
          el resto.
          </p>
          <div class="row mt-5">
            @foreach($missingAnimals as $key => $missingAnimal)
            <!-- col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4 mb-5 mb-lg-0 offset-sm-1 offset-md-2 offset-lg-0 offset-xl-1 -->
            <div class="col-md-6 col-xl-4 mb-5">
              <div class="card">
                <img class="w-100" src="{{ $missingAnimal->image }}">
                <div class="card-body">
                  <p class="justificado">
                    <img class="icono" 
                      @if (Auth::check() && Auth::user()->theme == 'dark')
                        src="../images/missing-animals/fecha-white.png"
                      @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                        src="../images/missing-animals/fecha-white.png"
                      @else
                        src="../images/missing-animals/fecha.png"
                      @endif
                      alt=""
                    >
                    &nbsp;&nbsp;
                    Desaparece a {{ date("d/m/Y", strtotime($missingAnimal->date)) }}
                  </p>
                  <p class="justificado">
                    <img class="icono" 
                      @if (Auth::check() && Auth::user()->theme == 'dark')
                        src="../images/missing-animals/lugar-white.png"
                      @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                        src="../images/missing-animals/lugar-white.png"
                      @else
                        src="../images/missing-animals/lugar.png"
                      @endif
                      alt=""
                    >
                    &nbsp;&nbsp;
                    Desaparece en {{ $missingAnimal->provinceAnimal->name }}
                  </p>
                  <p class="justificado">
                    <img class="icono" 
                      @if (Auth::check() && Auth::user()->theme == 'dark')
                        src="../images/missing-animals/nombre-white.png"
                      @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                        src="../images/missing-animals/nombre-white.png"
                      @else
                        src="../images/missing-animals/nombre.png"
                      @endif
                      alt=""
                    >
                    &nbsp;&nbsp;
                    {{ $missingAnimal->name }}
                  </p>
                  <p class="justificado">
                    <img class="icono" 
                      @if (Auth::check() && Auth::user()->theme == 'dark')
                        src="../images/missing-animals/raza-white.png"
                      @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                        src="../images/missing-animals/raza-white.png"
                      @else
                        src="../images/missing-animals/raza.png"
                      @endif
                      alt=""
                    >
                    &nbsp;&nbsp;
                    {{ $missingAnimal->breed }}
                  </p>
                  <p class="justificado">
                    <img class="icono" 
                      @if (Auth::check() && Auth::user()->theme == 'dark')
                        @if ($missingAnimal->gender == 'Macho')
                          src="../../images/missing-animals/sexo-white-macho.png"
                        @else
                          src="../../images/missing-animals/sexo-white-hembra.png"
                        @endif
                      @elseif (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') 
                        @if ($missingAnimal->gender == 'Macho')
                          src="../../images/missing-animals/sexo-white-macho.png"
                        @else
                          src="../../images/missing-animals/sexo-white-hembra.png"
                        @endif
                      @else
                        @if ($missingAnimal->gender == 'Macho')
                          src="../../images/missing-animals/sexo-macho.png"
                        @else
                          src="../../images/missing-animals/sexo-hembra.png"
                        @endif
                      @endif
                      alt=""
                    >
                    &nbsp;&nbsp;
                    {{ $missingAnimal->gender }}
                  </p>
                  <a type="button" class="btn btnMissingAnimal" data-toggle="modal" data-target="#@('haveYouSeenMe' + {{ $missingAnimal->name }})">
                    ¿Me has visto? ¡Avisa a mi dueño!
                  </a>
                </div>
              </div>
            </div>
            <!-- ¿Me has visto? Modal -->
            <div class="modal fade" id="@('haveYouSeenMe' + {{ $missingAnimal->name }})" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">¿Has encontrado a {{ $missingAnimal->name }}?</h5>
                    <button type="button" class="close modal-closed" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST">
                      @csrf
              
                      <div class="row mb-4">
                        <div class="col-10 offset-1 mt-3 mb-3">
                          <p class="parrafo"> 
                            Si crees haber encontrado a {{ $missingAnimal->name }}, rogamos cumplimentes el siguiente formulario: 
                          </p>
                        </div>
                      </div>
  
                      <div class="row">
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input type="text" name="reportEmail"
                            @if (Auth::check())
                              value="{{ Auth::user()->email }}"
                            @else
                              value="{{ old('reportEmail') }}"
                            @endif
                            >
                            <span class="text">Introduzca su email</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <span class="provincia-text">¿Dónde me has visto?</span>
                          <select class="select-provincia" name="reportSelect" onmousedown="this.size=6" onclick="this.size=0">
                            <option disabled selected>Seleccione una provincia</option>
                            @foreach($provinces as $key => $province) 
                            <option value="{{ $province->province_id }}" {{ old('registerSelect') == $province->province_id ? 'selected' : '' }}>{{ $province->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input type="text" name="reportAnimalName" value="{{ $missingAnimal->name }}">
                            <span class="text">Nombre del animal</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <input type="hidden" name="reportAnimalId" value="{{ $missingAnimal->animal_id }}">
                      </div>
                      <div class="row">
                        <div class="text-center col-10 offset-1 mt-3 mb-3">
                          <input type="submit" name="reportSubmit" value="Enviar">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- ... -->
      </div>
      <!-- Footer -->
      @include('partials.footer')
      <!-- ... -->
    </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

</html>