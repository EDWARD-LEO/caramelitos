//Verificando si el DOM está listo
document.addEventListener('DOMContentLoaded', function (){
  
  //Objeto modal
  const modalProductos = document.getElementById("modal-productos");

  //Evento de apertura
  modalProductos.addEventListener('shown.bs.modal', function(event){
    document.getElementById("nombre").focus();
  });

  //Evento de cierre
  modalProductos.addEventListener('hidden.bs.modal', function(event){
    //Se reinicia el formulario completamente al cerrar el modal
    document.getElementById("formulario-productos").reset();
  });

});