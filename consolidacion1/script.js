$(document).ready(function(){
	//Este funciona
	$('#Agregar').click(function(){
		codcliente = $('#codcliente').val();
		nombre = $('#nombre').val();
		ruc = $('#ruc').val();
		direccion = $('#direccion').val();
		telefono = $('#telefono').val();
		$.ajax({
	    url: "ingresar.php",
	    data: {codcliente: codcliente, nombre: nombre, ruc: ruc, direccion: direccion, telefono: telefono},
	    type:"POST",
	    dataType: "json",
	    success:function (json) {
				console.log(json);
				$.each(json,function (llave, linea) {
					var adicionar= "<tr id='+"+linea["CodCliente"]+"'><td>"+linea["CodCliente"]+"</td><td>"+linea["Nombre"]+"</td><td>"+linea["Ruc"]+"</td><td>"+ linea["Direccion"]+"</td><td>"+linea["Telefono"]+"</td></tr>";
			    $("tbody").append(adicionar);
				});

	    }
	  });
	});
//hasta aqui funciona
	});
