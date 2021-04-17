<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">

    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="STYLESHEET" type="text/css" href="css/appearance.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>  </title>

</head>
<body>

  <div class="container-fluid">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- ... -->

    <!-- Ajustes - Apariencia -->
    <section class="row mt-5">

      <!-- Navbar - Settings -->
      @include('partials.navbar-settings')
      <!-- ... -->
      
      <div class="w-100 d-md-none"></div>
      <div class="col-10 col-md-6 mt-5 mt-md-0 offset-1 offset-md-0">
        <h3 class="mb-4">Apariencia</h3>
        <hr class="">
        <div class="row">
          <div class="col-12">
            <p class="justificado">Elige como quieres que se te muestre <i>El Amigo de los Animales.</i></p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">
                Modo por defecto
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Modo oscuro
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
              <label class="form-check-label" for="flexRadioDefault3">
                Modo dislexia
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
              <label class="form-check-label" for="flexRadioDefault4">
                Modo daltonismo
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
              <label class="form-check-label" for="flexRadioDefault5">
                Modo vista cuidada (aumenta el tamaño de la fuente)
              </label>
            </div>
            <br>
            <input type="submit" value="Guardar preferencias">
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