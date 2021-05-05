<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->

    <title>Cuenta - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">

    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="STYLESHEET" type="text/css" href="css/account.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

  <div class="container-fluid">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- ... -->

    <!-- Ajustes - Cuenta -->
    <section class="row mt-5">

      <!-- Navbar - Settings -->
      @include('partials.navbar-settings')
      <!-- ... -->
      
      <div class="w-100 d-md-none"></div>
      <div class="col-10 col-md-6 mt-5 mt-md-0 offset-1 offset-md-0">
        <h3 class="mb-4">Borrar la cuenta</h3>
        <hr class="">
        <div class="row">
          <p class="justificado"> Es necesario que tengas en cuenta que vas a llevar a cabo una acción que NO es reversible. 
          <br><br>Una vez confirmes el borrado de tu cuenta, desaparecerá para siempre. No habrá posibilidad de recuperarla, 
          ni tampoco cualquier tipo de acción o contenido asociado a la misma.</p>
          <form method="POST">
            {{method_field('DELETE')}}
            @csrf
            <div class="col-12 mt-5">
              <div class="inputBox">
                <input type="email" name="accountEmail" value="{{ Auth::user()->email }}" required="required">
                <span class="text">Email</span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <div class="inputBox">
                <input type="password" name="accountPassword" required="required">
                <span class="text">Contraseña</span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <div class="inputBox">
                <input type="text" name="accountConfirmDelete" required="required">
                <span class="text"><strong>Escribe:</strong> <i>Deseo borrar mi cuenta</i></span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <input type="submit" value="Borrar cuenta">
            </div>
          </form>
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