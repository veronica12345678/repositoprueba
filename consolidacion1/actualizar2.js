$(document).ready(function(){
  $('tbody').on('click','a',function(elemento){
    var name = elemento.target.name;
    if (name == "actuali") {
      var id = elemento.target.id;
      $(".visible").css("display", "none");
      $(".oculto").css("display"," block");
      $("input[name=codproducto]").val(id);
    }else {
      var id = elemento.target.id;
      $.ajax({
  	    url: "eliminar2.php",
  	    data: {codproducto: id},
  	    type:"POST",
  	    dataType: "text",
  	    success:function (json) {
          if (json=="1") {
            alert("La informacion a sido borrada");
            location.reload();
          }else {
            alert("Hubo un error al eliminar la informacion del produto");
          }
  	    },
        error:function(xhr, status) {
          alert("Hubo un error al eliminar la informacion del produto");
        }
  	  });
    }
  });

  $("#actualiCl").click(function (evento) {
    codproducto = $('#codproducto').val();
    nombre = $('#nombre').val();
    cantidad = $('#cantidad').val();
    descripcion = $('#descripcion').val();
    modelo = $('#modelo').val();
    $.ajax({
	    url: "actualizar2.php",
	    data: {codproducto: codproducto, nombre: nombre, cantidad: cantidad, descripcion: descripcion, modelo: modelo},
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
