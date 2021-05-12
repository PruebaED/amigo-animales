<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->

    <title>Perfil - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">

    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="STYLESHEET" type="text/css" href="css/profile.css">
    
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

    <!-- Scroll to top button -->
    @include('utilities.scroll-to-top')
    <!-- ... -->

    <!-- Ajustes - Perfil -->
    <section class="row mt-5">

      <!-- Navbar - Settings -->
      @include('partials.navbar-settings')
      <!-- ... -->
      
      <div class="w-100 d-md-none"></div>
      <div class="col-10 col-md-6 mt-5 mt-md-0 offset-1 offset-md-0">
        <h3>Perfil</h3>
        <hr class="mb-5">
        <div class="row">
          <form method="POST">
            {{method_field('PUT')}}
            @csrf
            <div class="col-12">
              <div class="inputBox">
                <input type="text" name="profileName" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->name }}"
                @endif
                >
                <span class="text">Nombre</span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <div class="inputBox">
                <input type="text" name="profileSurnames" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->surnames }}"
                @endif
                >
                <span class="text">Apellidos</span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <div class="inputBox">
                <input type="email" name="profileEmail" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->email }}"
                @endif
                >
                <span class="text">Email</span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <div class="inputBox">
                <input type="tel" name="profilePhone" pattern="[0-9]{9}" required="required"
                @if (Auth::check())
                  value="{{ Auth::user()->phone }}"
                @endif
                >
                <span class="text">Teléfono</span>
                <span class="line"></span>
              </div>
              <br><br>
            </div>
            <div class="col-12">
              <input type="submit" value="Actualizar perfil">
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