<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <title>Restablece tu contraseña - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">
    
    <link rel="shortcut icon" type="image/x-icon" href="images/icono.ico">

    <link rel="STYLESHEET" type="text/css" href="css/password-reset.css">
    
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
    <section>
      <!-- Errores producidos en el formulario -->
      @if (count($errors) > 0) @include('utilities.form-errors') @endif
      <!-- ... -->

      <div class="container">
        <div class="user">
          <div class="formBx formRegister">
            <form method="POST">
              @csrf
              <h2>Restablece tu contraseña</h2>
              <input class="form-control" type="text" name="passwordResetEmail" placeholder="Email" value="{{ old('passwordResetEmail') }}">
              <input class="btn btn-primary" type="submit" name="passwordResetSubmit" value="Envía el link de recuperación">
              <p class="signup"> ¿Recuerdas tu contraseña? <a href="/login"> Inicia sesión. </a> </p>
            </form>
          </div>
          <div class="imgBx"><img src="images/password-reset/perro_recuperar_contraseña.jpg"></div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>
</html>