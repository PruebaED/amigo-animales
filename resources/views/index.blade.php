<!doctype html>

<html lang="en">

  <head>
	
    <!-- Required meta tags -->

		<meta content="text/html"; charset="utf-8" http-equiv="content-type">
		
		<link rel="shortcut icon" type="image/x-icon" href="images/icono.ico">

		<link rel="STYLESHEET" type="text/css" href="css/index.css">
    <link rel="STYLESHEET" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/toggle-elements.js"></script>

    <title> El Amigo de los Animales </title>

  </head>

  <body 
    @if (Auth::check()) class="{{ Auth::user()->theme }}" 
    @elseif (isset($_COOKIE['theme'])) class="{{ $_COOKIE['theme'] }}" 
    @endif
  >

    <div class="container-fluid">
      <!-- Scroll to top button -->
      @include('utilities.scroll-to-top')
      <!-- ... -->
      
      <!-- PRESENTACIÓN PÁGINA -->
      <div class="row">
        <section class="col-12">
          <header>
            <a class="logo">Lealtad.</a>
            <div class="toggle"></div>
          </header>
          <div class="glass"></div>
          <div class="content">
            <h2><span>No vamos a cambiar el mundo ayudando a un animal, pero al menos el mundo habrá cambiado para él.</span></h2>
          </div>
          <ul class="navigation">
            <li class="d-none d-sm-block" style="--i:1;"><a href="/">Inicio</a></li>
            <li class="d-none d-sm-block" style="--i:2;"><a href="#adoption">Adopción</a></li>
            <li style="--i:3;"><a href="/animals/deliver">Entrega</a></li>
            <li style="--i:4;"><a href="/animals/rescue">Rescate</a></li>
            <li style="--i:5;"><a href="/animals/missings">Animales desaparecidos</a></li>
            <li style="--i:6;"><a href="/information/regulations">Normativa</a></li>
            <li class="d-none d-sm-block" style="--i:7;"><a href="/information/animals-pd">Animales PPP</a></li>
            <li style="--i:8;"><a href="/contact/form">Contacto</a></li>
            <li style="--i:9;"><a href="/settings/profile">Ajustes</a></li>
            <li style="--i:10;">
            @if (!Auth::check())
              <a href="/auth/login">Iniciar sesión</a>
            @else
              <a href="/auth/logout">Cerrar sesión</a>
            @endif
            </li>
          </ul>
          <video src="videos/video.mp4" autoplay muted loop></video>
        </section>
      </div>
      <!-- ... -->

      <!-- SECCIÓN ANIMALES -->
      <section class="row">
        <div id="adoption" class="col-10">
          <!-- Éxitos producidos en formularios que redirigen a la página de inicio -->
            @if (session('success')) @include('utilities.form-success') @endif
          <!-- ... --> 

          <!-- Errores producidos en el formulario -->
          @if (count($errors) > 0) @include('utilities.form-errors') @endif
          <!-- ... -->
          <h1 class="text-center mt-5 mb-5"> Animales disponibles </h1> 
          <hr class="mb-4">
          <!-- Button trigger modal -->
          <button type="button" class="btn mt-4 mb-5 btnPostAnimal" data-toggle="modal" data-target="#postAnimalModal"> Publique a su animal </button>

          <!-- Modal -->
          <div class="modal fade" id="postAnimalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Dar en adopción/acogida</h5>
                    <a type="button" href="#" class="close modal-closed" data-dismiss="modal" aria-label="close">&times;</a>
                  </div>
                  <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-4">
                        <div class="col-10 offset-1 mt-3 mb-3">
                          <p class="parrafo"> 
                            Rogamos cumplimentes el siguiente formulario a fin de poder procesar tu solicitud de forma satisfactoria. Comprueba que la información introducida acerca de tu animal es correcta: 
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input class="form-control" type="text" name="indexAnimalEmail"
                            @if (Auth::check())
                              value="{{ Auth::user()->email }}"
                            @else
                              value="{{ old('indexEmail') }}"
                            @endif
                            >
                            <span class="text">Introduzca su email</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <span class="select-text">Provincia</span>
                          <select class="form-control select-custom" name="indexAnimalProvince" onmousedown="this.size=6;" onchange='this.size=0;' onblur="this.size=0;">
                            <option disabled selected>Seleccione una provincia</option>
                            @foreach($provinces as $key => $province) 
                            <option value="{{ $province->province_id }}">{{ $province->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input class="form-control" type="text" name="indexAnimalName">
                            <span class="text">Nombre</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input class="form-control" type="text" name="indexAnimalAge">
                            <span class="text">Edad</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <span class="select-text">Género</span>
                          <select class="form-control select-custom" name="indexAnimalGender" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                            <option disabled selected>Seleccione una...</option>
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                          </select>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input class="form-control" type="text" name="indexAnimalBreed">
                            <span class="text">Raza</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input class="form-control" type="text" name="indexAnimalWeight">
                            <span class="text">Peso</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col-10 offset-1 mb-5">
                          <div class="inputBox">
                            <input class="form-control-file imageFile" type="file" name="indexAnimalImage" accept="image/*">
                            <span class="text">Imagen</span>
                            <span class="line"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <div class="inputBox textarea">
                          <textarea class="form-control" type="text" name="indexAnimalDescription"></textarea>
                          <span class="text">Descripción</span>
                          <span class="line"></span>
                        </div>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <span class="select-text">¿Está vacunado?</span>
                        <select class="form-control select-custom" name="indexAnimalVaccinated" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                          <option disabled selected>Seleccione una...</option>
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <span class="select-text">¿Está sano?</span>
                        <select class="form-control select-custom" name="indexAnimalHealthy" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                          <option disabled selected>Seleccione una...</option>
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <span class="select-text">¿Está esterilizado?</span>
                        <select class="form-control select-custom" name="indexAnimalSterilize" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                          <option disabled selected>Seleccione una...</option>
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <span class="select-text">¿Está castrado?</span>
                        <select class="form-control select-custom" name="indexAnimalCastrated" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                          <option disabled selected>Seleccione una...</option>
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <span class="select-text">¿Está desparasitado?</span>
                        <select class="form-control select-custom" name="indexAnimalDewormed" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                          <option disabled selected>Seleccione una...</option>
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="col-10 offset-1 mb-5">
                        <span class="select-text">¿Tiene microchip?</span>
                        <select class="form-control select-custom" name="indexAnimalMicrochip" onmousedown="this.size=3;" onchange='this.size=0;' onblur="this.size=0;">
                          <option disabled selected>Seleccione una...</option>
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="text-center col-10 offset-1 mt-3 mb-3">
                          <input type="submit" name="indexPostAnimal" value="Enviar">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <!-- ... -->
        </div>
        @foreach($animalsToAdopt as $key => $animal) 
        <div class="col-md-10 col-lg-6 col-xl-4 mb-5">
          <div class="single-content">
            <img src="{{ $animal->image }}" alt="{{ $animal->name }}">
            <div class="text-content">
              <h5 class="mt-3 mb-2">{{ $animal->name }}</h5>
              <h5 class="mb-2">{{ $animal->breed }}</h5>
              <h5 class="mb-2">{{ $animal->provinceAnimal->name }}</h5>
              <button type="button" onclick="window.location.href='{{ url('animals/detail-view/' . $animal->animal_id ) }}';" class="btn mt-3 mx-3">Más información</button>
            </div>
          </div>
        </div>
        @endforeach
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
