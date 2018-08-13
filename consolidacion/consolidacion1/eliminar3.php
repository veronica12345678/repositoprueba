<?php
$conectar = new mysqli ('localhost', 'root','1234','clientes');

if (isset($_POST)) {
  $codid = $_POST["codid"];
  $info = $conectar->query("delete from comprayv  where Codid="."'$codid'");
  echo $info;
}
?>
