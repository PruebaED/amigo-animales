$(document).ready(function(){

  function desplegable() {

    $(this).toggleClass("active");
    $("section").toggleClass("active");

  }

  $(".toggle").click(desplegable);

});