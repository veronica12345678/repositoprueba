$(document).ready(function(){
  $('tbody').on('click','a',function(elemento){
    var name = elemento.target.name;
    if (name == "actuali") {
      var id = elemento.target.id;
      $(".visible").css("display", "none");
      $(".oculto").css("display"," block");
      $("input[name=codcliente]").val(id);
    }else {
      var id = elemento.target.id;
      $.ajax({
  	    url: "eliminar1.php",
  	    data: {codcliente: id},
  	    type:"POST",
  	    dataType: "text",
  	    success:function (json) {
          if (json=="1") {
            alert("La informacion a sido borrada");
            location.reload();
          }else {
            alert("Hubo un error al eliminar la informacion cliente");
          }
  	    },
        error:function(xhr, status) {
          alert("Hubo un error al eliminar la informacion cliente");
        }
  	  });
    }
  });

  $("#actualiCl").click(function (evento) {
    codcliente = $('#codcliente').val();
		nombre = $('#nombre').val();
		ruc = $('#ruc').val();
		direccion = $('#direccion').val();
		telefono = $('#telefono').val();
    $.ajax({
	    url: "actualizar1.php",
	    data: {codcliente: codcliente, nombre: nombre, ruc: ruc, direccion: direccion, telefono: telefono},
	    type:"POST",
	    dataType: "text",
	    success:function (json) {
        if (json=="1") {
          alert("Su informacion a sido actualizada");
          location.reload();
        }else {
          alert("Hubo un error en la actualización");
        }
	    },
      error:function(xhr, status) {
        alert("Hubo un error en la actualización");
      }
	  });
  });
});
