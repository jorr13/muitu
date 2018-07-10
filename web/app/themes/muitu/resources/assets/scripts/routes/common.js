export default {
  init() {
    $(".contacto").click(function (e) { 
      e.preventDefault();
      $("#registrar-usuario").addClass("is-active");
    });
    $("#cerrar").click(function (e) { 
      e.preventDefault();
      $("#registrar-usuario").removeClass("is-active");
    });

   $('.botonmenu').click(function (e) { 
     e.preventDefault();

     //$('.menuprimario').slideToggle();
     $(".menuprimario").animate({width:'toggle', paddingLeft: 'toggle',paddingRight: 'toggle'},350);
     //$(".menuprimario").toggle('slide', {direction: 'right'}, 1000);
   });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
