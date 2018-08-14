<?php
$conectar = new mysqli ("localhost","root","1234","clientes");


if (isset($_POST)){
  $nombre = $_POST["nombre"];
  $cantidad = $_POST["cantidad"];
  $descripcion = $_POST["descripcion"];
  $modelo = $_POST["modelo"];
  $cdo= $_POST["codproducto"];
  $infos = $conectar -> query("UPDATE productos SET Nombre="."'$nombre'".", Cantidad="."'$cantidad'".", Descripcion="."'$descripcion'".", Modelo="."'$modelo'"." WHERE CodProducto="."'$cdo'");
  echo $infos;
}
?>
