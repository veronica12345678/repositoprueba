<?php
$conectar = new mysqli ('localhost', 'root','1234','clientes');

if (isset($_POST)) {
  $cod = $_POST["codproducto"];
  $info = $conectar->query("delete from productos where CodProducto="."'$cod'");
  echo $info;
}
 ?>
