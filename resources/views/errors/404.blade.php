<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <title>Error 404 - El Amigo de los Animales</title>

    <meta content="text/html"; charset="utf-8" http-equiv="content-type">
    
    <link rel="shortcut icon" type="image/x-icon" href="../images/icono.ico">

    <link rel="STYLESHEET" type="text/css" href="../css/404.css">
    
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
      <div class="container">
        <div class="outerBx">
          <div class="imgBx">
            <img src="images/404-error/perro_error_404.jpg">
            <img src="../images/404-error/perro_error_404.jpg">
          </div>
          <div class="innerBx row">
            <div class="col-10 offset-1"> <h2>ERROR 404.</h2> </div>
            <div class="col-10 offset-1"> <h2>Lo sentimos, pero la página que estabas buscando no está disponible.</h2> </div>
            <div class="col-10 offset-6"> <p class="linkHome"> <a href="/"> Llévame a casa. </a> </p> </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>