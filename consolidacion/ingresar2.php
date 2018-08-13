<?php
$conectar = new mysqli("localhost","root","1234","clientes");
$conectar->query("insert into productos (CodProducto, Nombre, Cantidad, Descripcion, Modelo) values ('".$_POST["codproducto"]."','".$_POST["nombre"]."','".$_POST["cantidad"]."','".$_POST["descripcion"]."','".$_POST["modelo"]."')");
$personabd = $conectar->query("SELECT * from productos");

?>
