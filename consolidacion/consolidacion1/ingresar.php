<?php
$conectar = new mysqli("localhost","root","1234","clientes");
$conectar->query("insert into clientes (CodCliente, Nombre, Ruc, Direccion, Telefono) values ('".$_POST["codcliente"]."','".$_POST["nombre"]."','".$_POST["ruc"]."','".$_POST["direccion"]."','".$_POST["telefono"]."')");
$personabd = $conectar->query("SELECT * from clientes");

?>
