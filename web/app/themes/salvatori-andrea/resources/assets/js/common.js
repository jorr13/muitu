     //animaciones
    var $animation_elements = $('.an');
    var $window = $(window);
    
    function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    
    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);
    
      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
        $element.addClass('animated fadeInUp');
      }
    });
    }
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');




$(document).ready(function(){

    var imgItems = $('.slider li').length; // Numero de Slides
    var imgPos = 1;
    // Agregando paginacion --

    //------------------------
    
    $('.slider li').hide(); // Ocultanos todos los slides
    $('.slider li:first').show(); // Mostramos el primer slide
    $('.pagination li:first').css({'color': '#CD6E2E'}); // Damos estilos al primer item de la paginacion
    
    // Ejecutamos todas las funciones
    $('.pagination li').click(pagination);
    $('.right span').click(nextSlider);
    $('.left span').click(prevSlider);
    
    
    setInterval(function(){
        nextSlider();
    }, 10000);
    
    // FUNCIONES =========================================================
    
    function pagination(){
        var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada
    
        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado
    
        // Dandole estilos a la paginacion seleccionada
        $('.pagination li').css({'color': '#858585'});
        $(this).css({'color': '#CD6E2E'});
    
        imgPos = paginationPos;
    
    }
    
    function nextSlider(){
        if( imgPos >= imgItems){imgPos = 1;} 
        else {imgPos++;}
    
        $('.pagination li').css({'color': '#858585'});
        $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});
    
        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li').removeClass('active'); // Ocultamos la clase de todos los slides
        $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
        $('.slider li:nth-child('+ imgPos +')').addClass('active'); // Mostramos la clase en el item seleccionado
        //////////////////
        function getAverageRGB(imgEl) {

        var blockSize = 5, // only visit every 5 pixels
            defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
            canvas = document.createElement('canvas'),
            context = canvas.getContext && canvas.getContext('2d'),
            data, width, height,
            i = -4,
            length,
            rgb = {r:0,g:0,b:0},
            count = 0;
        
        if (!context) {
            return defaultRGB;
        }
        
        height = canvas.height = imgEl.height;
        width = canvas.width = imgEl.width;
        
        context.drawImage(imgEl, 0, 0);
        
        try {
            data = context.getImageData(0, 0, width, height);
        } catch(e) {
            /* security error, img on diff domain */
            return defaultRGB;
        }
        
        length = data.data.length;
        
        while ( (i += blockSize * 4) < length ) {
            ++count;
            rgb.r += data.data[i];
            rgb.g += data.data[i+1];
            rgb.b += data.data[i+2];
        }
        
        // ~~ used to floor values
        rgb.r = ~~(rgb.r/count);
        rgb.g = ~~(rgb.g/count);
        rgb.b = ~~(rgb.b/count);
        
        return rgb;
        
        }
        
        var imagen  = document.querySelector(".active img");
        var rgb_promedio = getAverageRGB(imagen);
        $('body, html').css({'background-color': 'rgba('+ rgb_promedio.r + ',' + rgb_promedio.g + ',' + rgb_promedio.b +', 0.5)' });
    }
    ////////////////////
    function prevSlider(){
        if( imgPos <= 1){imgPos = imgItems;} 
        else {imgPos--;}
    
        $('.pagination li').css({'color': '#858585'});
        $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});
    
        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
        //////////////////
        function getAverageRGB(imgEl) {

        var blockSize = 5, // only visit every 5 pixels
            defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
            canvas = document.createElement('canvas'),
            context = canvas.getContext && canvas.getContext('2d'),
            data, width, height,
            i = -4,
            length,
            rgb = {r:0,g:0,b:0},
            count = 0;
        
        if (!context) {
            return defaultRGB;
        }
        
        height = canvas.height = imgEl.height;
        width = canvas.width = imgEl.width;
        
        context.drawImage(imgEl, 0, 0);
        
        try {
            data = context.getImageData(0, 0, width, height);
        } catch(e) {
            /* security error, img on diff domain */
            return defaultRGB;
        }
        
        length = data.data.length;
        
        while ( (i += blockSize * 4) < length ) {
            ++count;
            rgb.r += data.data[i];
            rgb.g += data.data[i+1];
            rgb.b += data.data[i+2];
        }
        
        // ~~ used to floor values
        rgb.r = ~~(rgb.r/count);
        rgb.g = ~~(rgb.g/count);
        rgb.b = ~~(rgb.b/count);
        
        return rgb;
        
        }
        
        var imagen  = document.querySelector(".active img");
        var rgb_promedio = getAverageRGB(imagen);
        $('body, html').css({'background-color': 'rgba('+ rgb_promedio.r + ',' + rgb_promedio.g + ',' + rgb_promedio.b +', 0.6)' });


        
    }
    });

    $(window).on("load", function (e){
        $('#page-loader').fadeOut(1000);
        });
    
      $(".contacto").click(function (e) { 
        e.preventDefault();
        var email = $(this).data('email');
        $("#registrar-usuario").fadeIn();
        $("#registrar-usuario #email-receptor").val(email);
      });
      $("#cerrar, .modal-background").click(function (e) { 
        e.preventDefault();
        $("#registrar-usuario").fadeOut();
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

      console.log('guardado')


      
    ////////
    
    
    setInterval(() => {
    var precioExiste = $('.shipping .amount').length;
    
    if( precioExiste != 0 ){    
        $('.checkout-button').addClass('shipping');

    }
    else{
        $('.checkout-button').removeClass('shipping');
   }
    }, 1000);

    
    


/*

        $(".checkout-button").removeClass("button ");
        $(".checkout-button").addClass("botonbloquiado");
        $('.button').click(function(){
              var getNameButton = $(this).attr('name');
            
              if(getNameButton == 'calc_shipping') {
                  $(".checkout-button").removeClass("button"),
                  $(".checkout-button").addClass("botonbloquiado");
              }else{
                  $(".checkout-button").removeClass("botonbloquiado");
              }
          });
  

     */
    //para enviar correo
    // Aqui va el script para el form del footer
    $("#submitemail").click(function (e) {
    e.preventDefault();
    var name = $("#nombre").val();
    var email = $("#emailcliente").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    var correo_enviar =$("#email-receptor").val();
    $("#returnmessage").empty(); // To empty previous error/success message.
    // Checking for blank fields.
    if (name == '' || email == '' || telefono == ''|| mensaje == '') {
      alert("Porfavor llene todos los campos antes de enviar el mensaje");
    } else {
      // Returns successful data submission message when the entered information is stored in database.
      $.post("https://www.muituhandmade.com/extras/contact_form.php", {
        name1: name,
        email1: email,
        telefono1: telefono,
        mensaje1: mensaje,
        correo_enviar1: correo_enviar,
      }, function (data) {
        $("#returnmessage").append(data); // Append returned message to message paragraph.
        if (data == "Gracias. Estaremos en contacto muy pronto.") {
          $("#subscription-form")[0].reset(); // To reset form fields on success.
        }
      });
    }
    });
    $(document).ready(function(){
    $(".woocommerce-order-details__title").append("<a href='https://muituhandmade.com' class='verproductoshop factura'>Inicio</a>");
    });
    $(".is-small").click(function(){
        $('html, body').animate({ scrollTop: ($(".titlearriba").offset().top) -100 }, 1500); 
      });


      $("#submitfoooter").click(function (e) {
        e.preventDefault();
        var name = $("#namefooter").val();
        var email = $("#emailfooter").val();
        var mensaje = $("#mensajefooter").val();
        $("#returnmessagefooter").empty(); // To empty previous error/success message.
        // Checking for blank fields.
        if (name == '' || email == '' || mensaje == '') {
          alert("Porfavor llene todos los campos antes de enviar el mensaje");
        } else {
          // Returns successful data submission message when the entered information is stored in database.
          $.post("https://www.muituhandmade.com/extras/contact_form2.php", {
            name2: name,
            email2: email,
            mensaje2: mensaje,
          }, function (data) {
            $("#returnmessagefooter").append(data); // Append returned message to message paragraph.
            if (data == "Gracias. Estaremos en contacto muy pronto.") {
              $("#subscription-form")[0].reset(); // To reset form fields on success.
            }
          });
        }
        });
