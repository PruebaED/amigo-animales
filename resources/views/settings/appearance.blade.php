<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->

    <title>Apariencia - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">

    <link rel="shortcut icon" type="image/x-icon" href="../images/icono.ico">

    <link rel="STYLESHEET" type="text/css" href="../css/appearance.css">
    
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

    <!-- Ajustes - Apariencia -->
    <section class="row mt-5">
      <!-- Navbar - Settings -->
      @include('partials.navbar-settings')
      <!-- ... -->

      <!-- Mensaje de éxito tras actualizar el tema correctamente -->
      @if (session('success')) @include('utilities.form-success') @endif
      <!-- ... -->
      
      <div class="w-100 d-md-none"></div>
      <div class="col-10 col-lg-6 mt-5 mt-lg-0 offset-1 offset-lg-0">
        <h3 class="mb-4">Apariencia</h3>
        <hr class="">
        <div class="row">
          <div class="col-12">
            <p class="justificado">Elige como quieres que se te muestre <i>El Amigo de los Animales.</i></p>
            <div class="form-check">
              <form method="POST">
                {{method_field('PUT')}}
                @csrf
                <input class="form-check-input" type="radio" name="appearanceRadioButton" id="flexRadioDefault1" value="default"
                @if (Auth::check()) {{ (Auth::user()->theme == 'default')? "checked" : "" }} @endif >
                <label class="form-check-label" for="flexRadioDefault1">
                  Modo por defecto
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="appearanceRadioButton" id="flexRadioDefault2" value="dark"
                @if (Auth::check()) {{ (Auth::user()->theme == 'dark')? "checked" : "" }} @endif >
                <label class="form-check-label" for="flexRadioDefault2">
                  Modo oscuro
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="appearanceRadioButton" id="flexRadioDefault3" value="dyslexia"
                @if (Auth::check()) {{ (Auth::user()->theme == 'dyslexia')? "checked" : "" }} @endif >
                <label class="form-check-label" for="flexRadioDefault3">
                  Modo dislexia
                </label>
              </div>
              <br>
              <input class="mb-3" type="submit" value="Guardar preferencias">
            </form>
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