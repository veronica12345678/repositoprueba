$(document).ready(function(){
  $('tbody').on('click','a',function(elemento){
    var name = elemento.target.name;
    if (name == "actuali") {
      var id = elemento.target.id;
      $(".visible").css("display", "none");
      $(".oculto").css("display"," block");
      $("input[name=codid]").val(id);
    }else {
      var id = elemento.target.id;
      $.ajax({
        url: "eliminar3.php",
        data: {codid: id},
        type:"POST",
        dataType: "text",
        success:function (json) {
          if (json=="1") {
            alert("La informacion a sido borrada");
            location.reload();
          }else {
            alert("Hubo un error al eliminar la informacion de la venta");
          }                   
        },
        error:function(xhr, status) {
          alert("Hubo un error al eliminar la informacion de la venta");
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
    codproducto = $('#codproducto').val();
    cantidad = $('#cantidad').val();
    descripcion = $('#descripcion').val();
    modelo = $('#modelo').val();
    codid = $('#codid').val();
    fabricante = $('#fabricante').val();
    $.ajax({
      url: "actualizar3.php",
      data: {codcliente: codcliente, nombre: nombre, ruc: ruc, direccion: direccion, telefono: telefono, codproducto: codproducto, cantidad: cantidad, descripcion: descripcion, modelo: modelo, codid: codid, fabricante: fabricante},
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
