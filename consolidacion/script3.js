$(document).ready(function(){
  $('#Agregar3').click(function(){
    var codcliente = $('#codcliente').val();
    var nombre = $('#nombre').val();
    var ruc = $('#ruc').val();
    var direccion = $('#direccion').val();
    var telefono = $('#telefono').val();
    var codproducto = $('#codproducto').val();
    var cantidad = $('#cantidad').val();
    var descripcion = $('#descripcion').val();
    var modelo = $('#modelo').val();
    var codid = $('#codid').val();
    var fabricante = $('#fabricante').val();
    $.ajax({
      url: "ingresar3.php",
      data: {codcliente: codcliente, nombre: nombre, ruc: ruc, direccion: direccion, telefono: telefono,codproducto: codproducto, cantidad: cantidad, descripcion: descripcion, modelo: modelo,codid: codid,fabricante: fabricante},
        type:"POST",
        dataType: "text",
        success:function (json) {
          if (json == "1") {
            var max = parseInt("20");
            var min = parseInt("1");
            var cadauno = Math.random() * (max - min) + min;
            var total =cadauno * parseInt(cantidad);
            var iva = total * parseFloat("0.12");
            var totalfi = total+iva;
            $(".Factura").css("display","block");
            $(".ComVen").css("display","none")
            alert("Su compra ha sido echa satisfactoriamente");
            $("#CodCliente").html("Factura N° "+codid);
            $("#codcliente").html("Codigo del Cliente: "+ codcliente);
            $("#Nombre").html("Nombre: "+ nombre);
            $("#Ruc").html("Ruc: "+ ruc);
            $("#direcciont").html("Dirección: "+ direccion);
            $("#telefonot").html("Telefono: "+ telefono);
            var linea = "<tr><td>"+codproducto+"</td><td>"+descripcion+"</td><td>"+modelo+"</td><td>"+fabricante+"</td><td>"+cantidad+"</td><td>$ "+cadauno.toFixed(2) +"</td><td>$ "+total.toFixed(2)+"</td></tr>";
            $("#pre").append(linea);
            $("#subt").html("$ "+total.toFixed(2));
            $("#iva").html("$ "+iva.toFixed(2));
            $("#total").html("$ "+totalfi.toFixed(2));
            update_qrcode()
          }
        }
      });

    });

    $("input[name=cerrar]").click(function() {
      $(".Factura").css("display","none");
      $(".ComVen").css("display","block")
    });
  });
