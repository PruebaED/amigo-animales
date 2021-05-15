<!DOCTYPE html>
<html lang="en">

  <head>
  
    <!-- Required meta tags -->

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">
    
    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="STYLESHEET" type="text/css" href="css/navbar-settings.css">
    
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

    <!-- Navbar - Settings -->
    <div class="col-2 offset-4 offset-md-2">
      <ul class="nav flex-column vertical-menu">
        <li class="nav-item">
          <a class="nav-link nav-link-settings active" href="/profile">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-settings" href="/account">Cuenta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-settings" href="/appearance">Apariencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-settings" href="/security">Seguridad</a>
        </li>
      </ul>
    </div>

  </body>

</html>