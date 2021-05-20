<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <title>Registro - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">
    
    <link rel="shortcut icon" type="image/x-icon" href="images/icono.ico">

    <link rel="STYLESHEET" type="text/css" href="css/login-register.css">
    
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
        <div class="user signupBx">
          <div class="formBx formRegister">
            <form method="POST">
              @csrf
              <h2>Crea una cuenta</h2>
              <input class="form-control" type="text" name="registerName" placeholder="Nombre" value="{{ old('registerName') }}">
              <input class="form-control" type="text" name="registerSurnames" placeholder="Apellidos" value="{{ old('registerSurnames')}}">
              <input class="form-control" type="text" name="registerPhone" placeholder="Teléfono" value="{{ old('registerPhone') }}">
              <input class="form-control" type="text" name="registerEmail" placeholder="Email" value="{{ old('registerEmail') }}">
              <select class="form-control" name="registerSelect" onmousedown="this.size=4;" onchange='this.size=0;' onblur="this.size=0;">
                <option disabled selected>Seleccione una provincia</option>
                @foreach($provinces as $key => $province) 
                <option value="{{ $province->province_id }}" {{ old('registerSelect') == $province->province_id ? 'selected' : '' }}>{{ $province->name }}</option>
                @endforeach
              </select>
              <input class="form-control" type="password" name="registerPassword" placeholder="Contraseña" value="{{ old('registerPassword') }}">
              <input class="btn btn-primary" type="submit" name="registerSubmit" value="Registrarse">
              <p class="signup"> Ya tienes una cuenta? <a href="/login"> Inicia sesión. </a> </p>
            </form>
          </div>
          <div class="imgBx imgRegister"><img src="images/login-register/perro_registro.jpg"></div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>
</html>