export default {

  init() {
    // JavaScript to be fired on the home page
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
      $('#clickbolsos').click(function (e) { 
        e.preventDefault();
        $('#bolsos, #hamacas, #cinturones, #pulceras').fadeOut();
        $('#bolsos').fadeToggle();        
      });
      $('#clickhamacas').click(function (e) { 
        e.preventDefault();
        $('#bolsos, #hamacas, #cinturones, #pulceras').fadeOut();
        $('#hamacas').fadeToggle();        
      });
      $('#clickcinturnes').click(function (e) { 
        e.preventDefault();
        $('#bolsos, #hamacas, #cinturones, #pulceras').fadeOut();
        $('#cinturones').fadeToggle();        
      });
      $('#clickpulceras').click(function (e) { 
        e.preventDefault();
        $('#bolsos, #hamacas, #cinturones, #pulceras').fadeOut();
        $('#pulceras').fadeToggle();        
      });
},

finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
