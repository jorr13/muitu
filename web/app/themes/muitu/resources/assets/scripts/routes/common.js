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

    $(document).ready(function(){
      var show = 1;
      $('.botonmenu').click(function (e) { 
        e.preventDefault();
                
        if(show == 1){
          $('.menuprimario').addClass("content-menu2"), 1000;
          show = 0;
          }else{
          $('.menuprimario').removeClass("content-menu2"), 1000;
          show = 1;
        }

        //$('.menuprimario').slideToggle();
        //$(".menuprimario").animate({width:'toggle', paddingLeft: 'toggle',paddingRight: 'toggle'},350);
        //$(".menuprimario").toggle('slide', {direction: 'right'}, 1000);
      });
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
