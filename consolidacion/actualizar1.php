<?php
$conectar = new mysqli ("localhost","root","1234","clientes");

if (isset($_POST)){
  $nomnre= $_POST["nombre"];
  $ruc= $_POST["ruc"];
  $direccion = $_POST["direccion"];
  $telefono = $_POST["telefono"];
  $cdo = $_POST["codcliente"];
  $hola = $conectar -> query("UPDATE clientes SET nombre="."'$nomnre'".", ruc="."'$ruc'".", direccion="."'$direccion'".", telefono="."'$telefono'"." WHERE CodCliente=" ."'$cdo'");
  echo $hola;
}

?>
