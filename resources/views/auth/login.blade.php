<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <title>Inicio de sesión - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">
    
    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="STYLESHEET" type="text/css" href="css/login-register.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/login-register.js"></script>

  </head>

  <body 
    @if (Auth::check()) class="{{ Auth::user()->theme }}" 
    @elseif (isset($_COOKIE['theme'])) class="{{ $_COOKIE['theme'] }}" 
    @endif
  >
    <section>
      <!-- Errores producidos en el formulario -->
      @if (count($errors) > 0) @include('utilities.form-errors') @endif
      <!-- ... -->

      <!-- Éxitos producidos en formularios que redirigen al login -->
      @if (session('success')) @include('utilities.form-success') @endif
      <!-- ... -->

      <div class="container">
        <div class="user signinBx">
          <div class="imgBx"><img src="images/gato_registro.jpg"></div>
          <div class="formBx">
            <form method="POST">
              @csrf
              <h2>Inicio de sesión</h2>
              <input class="form-control" type="text" name="loginEmail" placeholder="Email" value="{{ old('loginEmail') }}">
              <input class="form-control" type="password" name="loginPassword" placeholder="Contraseña" value="{{ old('loginPassword') }}">
              <input class="form-check-input mt-2 mb-2" type="checkbox" value="on" name="loginRememberMe" id="loginRememberMe">
              <label class="form-check-label mt-2 mb-2" for="loginRememberMe"> Recuérdame </label>
              <br>
              <input class="btn btn-primary" type="submit" name="loginSubmit" value="Iniciar sesión">
              <p class="signup"> No tienes una cuenta? <a href="/register"> Regístrate. </a> </p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>
</html>