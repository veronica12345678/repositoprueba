<?php
$conectar = new mysqli('localhost',"root","1234","clientes");
$valores =$conectar->query("select * from clientes");
echo "<script type='text/javascript' src='jquery-3.2.1.min.js'></script>";
echo "<script type='text/javascript' src='actuli.js'></script>";
echo "<center><div class='visible'>";
echo "<title>Base de datos clientes</title>";
echo "<h2>Base de datos clientes</h2>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>Cod.cliente</th>";
echo "<th>Nombre</th>";
echo "<th>Ruc</th>";
echo "<th>Direccion</th>";
echo "<th>Telefono</th>";
echo "<th>Actualizar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";
echo"<tr>";
foreach ($valores as $valor) {
  foreach ($valor as $tipo => $value) {
    echo "<td>".$value."</td>";
    if ($tipo == "CodCliente") {
      $vvalor = $value;
    }
  }
  echo "<td><a id='$vvalor' name='actuali' href='#'>Actualizar</a></td>";
  echo "<td><a id='$vvalor' name='elimi' href='#'>Eliminar</a></td>";
echo "</tr>";
}

echo "</table>";
echo "<a href='index.html'>Adicionar clientes</a>";
echo "</div>";

echo("<div class='oculto' style='display:none'>

<h1>Ingrese sus nuevos datos</h1>
<input type='hidden' id='codcliente' name='codcliente' value=''>
<label>NOMBRE:</label>
<input type='text' id='nombre' placeholder='Nombre'pattern='[A-Za-z]{1,40}' required>
<p></p>
<label>RUC:</label>
<input type='number' id='ruc' placeholder='Ruc=' pattern='{1,40}' required>
<p></p>
<label>DIRECCION:</label>
<input type='text=' id='direccion' placeholder='Direccion=' pattern='[A-Za-z]' required>
<p></p>
<label>TELEFONO:</label>
<input type='number=' id='telefono' placeholder='Telefono='pattern='{1,40}' required>
<p></p>
<input type='button' id='actualiCl'value='Actualizar'></div></center>");

?>
