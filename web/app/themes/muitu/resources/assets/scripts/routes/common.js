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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
