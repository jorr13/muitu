export default {
  init() {
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

    if ($('.woocommerce-info').length == 0)
      $(".checkout-button").removeClass("button "),
      $(".checkout-button").addClass("botonbloquiado");

    else 
    if ($('.woocommerce-info').length > 0)     
    $(".checkout-button").removeClass("botonbloquiado");

    if ($('.woocommerce-info').length == 0)
    $('.order-total').addClass("disabled");

    else 
    if ($('.woocommerce-info').length > 0)     
    $('.order-total').removeClass("disabled");
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
},
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
