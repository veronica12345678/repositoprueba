<?php
$conectar = new mysqli("localhost","root","1234","clientes");

$info = $conectar->query("insert into comprayv (CodCliente, Nombre, Ruc, Direccion, Telefono, CodProducto, Cantidad, Descripcion,Modelo, Codid, Fabricante) values ('".$_POST["codcliente"]."','".$_POST["nombre"]."','".$_POST["ruc"]."','".$_POST["direccion"]."','".$_POST["telefono"]."',
'".$_POST["codproducto"]."','".$_POST["cantidad"]."','".$_POST["descripcion"]."','".$_POST["modelo"]."','".$_POST["codid"]."','".$_POST["fabricante"]."')");
echo $info;

?>
