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
      }, 4000);
    
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
        $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
    
      }
    
      function prevSlider(){
        if( imgPos <= 1){imgPos = imgItems;} 
        else {imgPos--;}
    
        $('.pagination li').css({'color': '#858585'});
        $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});
    
        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
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
