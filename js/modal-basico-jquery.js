$(document).ready(function (){
  
  //Evento apertura
  $("#modal-productos").on('shown.bs.modal', function(){
    $("#nombre").focus();
  });

  //Evento cierre
  $("#modal-productos").on('hidden.bs.modal', function(){
    $("#formulario-productos")[0].reset();
  });

});