<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">

    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="STYLESHEET" type="text/css" href="css/security.css">
    
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

    <!-- Ajustes - Perfil -->
    <section class="row mt-5">
      
      <!-- Navbar - Settings -->
      @include('partials.navbar-settings')
      <!-- ... -->
      
      <div class="w-100 d-lg-none"></div>
      <div class="col-10 col-lg-6 mt-5 mt-lg-0 offset-1 offset-lg-0">
        <h3>Cambiar la contraseña</h3>
        <hr class="mb-5">
        <div class="row">
          <div class="col-12">
            <div class="inputBox">
              <input type="text" name="" required="required">
              <span class="text">Antigua contraseña</span>
              <span class="line"></span>
            </div>
            <br><br>
          </div>
          <div class="col-12">
            <div class="inputBox">
              <input type="text" name="" required="required">
              <span class="text">Nueva contraseña</span>
              <span class="line"></span>
            </div>
            <br><br>
          </div>
          <div class="col-12">
            <div class="inputBox">
              <input type="text" name="" required="required">
              <span class="text">Confirme nueva contraseña</span>
              <span class="line"></span>
            </div>
            <br><br>
          </div>
          <div class="col-12">
            <input type="submit" value="Actualizar contraseña">
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