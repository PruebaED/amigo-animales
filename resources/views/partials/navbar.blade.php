<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->

		<meta content="text/html" charset="utf-8" http-equiv="content-type">
		
    @if (isset($animal->animal_id))
      <link rel="STYLESHEET" type="text/css" href="../../css/navbar.css">
    @else
      <link rel="STYLESHEET" type="text/css" href="../css/navbar.css">
    @endif
		
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body 
    @if (Auth::check()) class="{{ Auth::user()->theme }}" 
    @elseif (isset($_COOKIE['theme'])) class="{{ $_COOKIE['theme'] }}" 
    @endif
  >

    <!-- Navbar -->
    <header class="row sticky-top">
      <nav id="navbar" class="col-12 navbar navbar-expand-xl navbar-light bg-light">
        <a class="navbar-brand" class="mb-5 mb-lg-0" href="/">
          <img class="d-inline-block align-top logo mr-2"
            @if (isset($animal->animal_id))
              src="../../images/logo.png"
            @else
              src="../images/logo.png"
            @endif
            alt=""
          >
          <div class="amigo-animales">El Amigo de los Animales</div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item inicio">
              <a class="nav-link" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <li><a class="dropdown-item" href="/#adoption">Adopción</a></li>
                <li><a class="dropdown-item" href="/animals/deliver">Entrega</a></li>
                <li><a class="dropdown-item" href="/animals/rescue">Rescate</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/animals/missings">Animales desaparecidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Información de interés
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item" href="/information/regulations">Normativa</a></li>
                <li><a class="dropdown-item" href="/information/animals-pd">Animales PPP</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/settings/profile">Ajustes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contacto
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <li><a class="dropdown-item" href="/contact/information">Datos de contacto</a></li>
                <li><a class="dropdown-item" href="/contact/about-us">Acerca de nosotros</a></li>
                <li><a class="dropdown-item" href="/contact/form">Formulario de contacto</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            @if (!Auth::check())
              <a href="/auth/login"><button class="btn mt-1 mb-1">Iniciar sesión</button></a>
            @else
              <a href="/auth/logout"><button class="btn mt-1 mb-1">Cerrar sesión</button></a>
            @endif
          </ul>
        </div>
      </nav>
    </header>

  </body>

</html>