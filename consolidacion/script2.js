$(document).ready(function(){
$("#Agregar2").click(function(){
  codproducto = $('#codproducto').val();
  nombre = $('#nombre').val();
  cantidad = $('#cantidad').val();
  descripcion = $('#descripcion').val();
  modelo = $('#modelo').val();
  $.ajax({
    url: "ingresar2.php",
    data: {codproducto: codproducto, nombre: nombre, cantidad: cantidad, descripcion: descripcion, modelo: modelo},
    type:"POST",
    dataType: "json",
    success:function (json) {
      console.log(json);
      $.each(json,function (llave, linea) {
        console.log(linea);
        var adiocionar= "<tr id='+"+linea["CodProducto"]+"'><td>"+linea["CodProducto"]+"</td><td>"+linea["Nombre"]+"</td><td>"+linea["Cantidad"]+"</td><td>"+ linea["Descripcion"]+"</td><td>"+linea["Modelo"]+"</td></tr>";
        $("tbody").append(adiocionar);

      });

    }
  });
});
});
