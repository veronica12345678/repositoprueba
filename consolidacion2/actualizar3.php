<?php
$conectar = new mysqli ("localhost","root","1234","clientes");

//hacer metodo  post
if (isset($_POST)) {
  $cdi = $_POST["codid"];
  $nomnre= $_POST["nombre"];
  $ruc= $_POST["ruc"];
  $direccion = $_POST["direccion"];
  $telefono = $_POST["telefono"];
  $cdo = $_POST["codcliente"];
  $codPro = $_POST["codproducto"];
  $cantidad = $_POST["cantidad"];
  $descripcion = $_POST["descripcion"];
  $modelo = $_POST['modelo'];
  $fabricante = $_POST['fabricante'];
  $info = $conectar -> query("UPDATE comprayv SET codcliente="."'$cdo'".", nombre="."'$nomnre'".", ruc="."'$ruc'".", direccion="."'$direccion'".", telefono="."'$telefono'".", codproducto="."'$codPro'".", cantidad="."'$cantidad'".", descripcion="."'$descripcion'".", modelo="."'$modelo'".", fabricante="."'$fabricante'"." WHERE Codid="."'$cdi'");
   echo $info;
}
 ?>
