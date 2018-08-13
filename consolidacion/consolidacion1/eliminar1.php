<?php
$conectar = new mysqli ('localhost', 'root','1234','clientes');


if (isset($_POST)) {
  $cod = $_POST["codcliente"];
  $info = $conectar->query("DELETE FROM clientes WHERE CodCliente="."'$cod'");
  echo $info;
}
 ?>
