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
      });
    });



    if ($('.woocommerce-info').length == 0) 
      $(".checkout-button").css({"pointer-events" : "none"}),
      $(".checkout-button").css({"color" : "#D0D0D0"}),
      $(".checkout-button").css({"border" : "3px solid #D0D0D0"});
    else 
    if ($('.woocommerce-info').length > 0)     
      $(".checkout-button").css({"pointer-events" : "auto"});

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
