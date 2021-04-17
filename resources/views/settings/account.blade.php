<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->

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

    <title>  </title>

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
        <h3 class="mb-4">Cambiar nombre de usuario</h3>
        <hr class="">
        <div class="row">
          <div class="col-12">
            <p class="justificado">Cambiar el nombre de usuario puede tener efectos contraproducentes</p>
            <input type="submit" value="Cambiar nombre" data-toggle="modal" data-target="#cambiarNombreModal">
          </div>
        </div>
        <!-- Cambiar nombre modal -->
        <div class="modal fade" id="cambiarNombreModal">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header"> <h5 class="modal-title" id="exampleModalLongTitle">¿Estás seguro?</h5> </div>
              <div class="modal-body"> 
                Es necesario que tengas en cuenta que el cambio de tu nombre puede generar una serie de problemas. <br> <br> Todas las acciones que hayas realizado en la 
                página (adopción, entrega, contacto...) se mantendrán con tu antiguo nombre de usuario. Ello podría dificultar la identificación del titular que realizó
                cualquiera de las mencionadas acciones.
                <form>
                  <div class="form-group">
                    <br>
                    <input type="text" class="form-control" placeholder="Nuevo nombre de usuario">
                  </div>
                </form>
              </div>
              <div class="modal-footer"> 
                <button type="button" class="btn btn-success"> Cambiar nombre </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar </button> </div>
            </div>
          </div>
        </div>
        <h3 class="mt-5 mb-4">Borrar la cuenta</h3>
        <hr class="">
        <div class="row">
          <div class="col-12">
            <p class="justificado">Una vez que borres tu cuenta, no habrá marcha atrás. Tenlo en cuenta.</p>
            <input type="submit" value="Borrar cuenta"  data-toggle="modal" data-target="#borrarCuentaModal">
          </div>
        </div>
        <!-- Borrar cuenta modal -->
        <div class="modal fade" id="borrarCuentaModal">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header"> <h5 class="modal-title" id="exampleModalLongTitle">¿Estás seguro?</h5> </div>
              <div class="modal-body"> 
                Es necesario que tengas en cuenta que vas a llevar a cabo una acción que NO es reversible. <br><br>Una vez confirmes el borrado de tu cuenta, desaparecerá
                para siempre. No habrá posibilidad de recuperarla, ni tampoco cualquier tipo de acción o contenido asociado a la misma.
                <form>
                  <div class="form-group">
                    <br>
                    <input type="email" class="form-control" placeholder="Introduce tu email">
                    <br>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduce tu contraseña">
                    <br>
                  </div>
                  <label for="confirmacionTextual"><strong>Escribe:</strong> <i>Deseo borrar mi cuenta</i></label>
                  <input type="text" class="form-control" id="confirmacionTextual">
                </form>
              </div>
              <div class="modal-footer"> 
                <button type="button" class="btn btn-success"> Borrar cuenta </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar </button> </div>
            </div>
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