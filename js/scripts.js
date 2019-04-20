$ = jQuery.noConflict();

$(document).ready(function(){
    // mostrar menu responsivo
  $('.menu-movil').click(function(){
     $('.menu-sitio ul').slideToggle();

  });

  var width_pantalla = 992;

  $(window).resize(function(){
    if ( $(document).width() >= width_pantalla){
       $('.menu-sitio ul').show();
  }

  else{
      $('.menu-sitio ul').hide();
  }

  });

 

});