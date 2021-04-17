$(document).ready(function(){

  function cambioFormulario() {

    $(".container").toggleClass("active");

  }

  $(".signup a").click(cambioFormulario);

});