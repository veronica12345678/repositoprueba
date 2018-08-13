<?php
$conectar = new mysqli('localhost',"root","1234","clientes");
$valores =$conectar->query("select * from comprayv");
echo "<script type='text/javascript' src='jquery-3.2.1.min.js'></script>";
echo "<script type='text/javascript' src='actualizar3.js'></script>";
echo "<center><div class='visible'>";
echo "<title>Base de datos comprayv</title>";
echo "<h2>Base de datos comprayv</h2>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>Cod.cliente</th>";
echo "<th>Nombre</th>";
echo "<th>Ruc</th>";
echo "<th>Direccion</th>";
echo "<th>Telefono</th>";
echo "<th>Cod.producto</th>";
echo "<th>Cantidad</th>";
echo "<th>Descripcion</th>";
echo "<th>Modelo</th>";
echo "<th>Cod.id</th>";
echo "<th>Fabricante</th>";
echo "<th>Actualizar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";
echo"<tr>";
foreach ($valores as $valor) {
  foreach ($valor as $tipo => $value) {
    echo "<td>".$value."</td>";
    if ($tipo == "Codid") {
      $vvalor = $value;
    }
  }
  echo "<td><a id='$vvalor' name='actuali' href='#'>Actualizar</a></td>";
  echo "<td><a id='$vvalor' name='elimi' href='#'>Eliminar</a></td>";
  echo "</tr>";
}

echo "</table>";
echo "<a href='index.html'>Adicionar comprayv</a>";
echo "</div>";


echo("<div class='oculto' style='display:none'>

<h1>Ingrese sus nuevos datos</h1>
<input type='hidden' name='codid' id='codid'>
<td><label>COD.CLIENTE:</label></td>
<input type='number' id='codcliente' placeholder='Cod.cliente' pattern='{1,40}' required>
<p></p>
  <label>NOMBRE:</label>
 <input type='text' id='nombre' placeholder='Nombre'pattern='[A-Za-z]{1,40}' required>
 <p></p>
  <label>RUC:</label>
 <input type='number' id='ruc' placeholder='Ruc' pattern='{1,40}' required>
 <p></p>
  <label>DIRECCION:</label>
 <input type='text' id='direccion' placeholder='Direccion' pattern='[A-Za-z]{1,40}' required>
 <p></p>
  <label>TELEFONO:</label>
 <input type='number' id='telefono' placeholder='Telefono'pattern='{1,40}' required>
 <p></p>
 <label>COD.PRODUCTO:</label>
 <input type='number' id='codproducto' placeholder='Cod.Producto' pattern='{1,40}' required>
 <p></p>
  <label>CANTIDAD:</label>
 <input type='number' id='cantidad' placeholder='Cantidad'pattern='{1,40}' required>
 <p></p>
  <label>DESCRIPCION:</label>
 <input type='text' id='descripcion' placeholder='Descripcion' pattern='[A-Za-z]{1,40}' required>
 <p></p>
  <label>MODELO:</label>
 <input type='text' id='modelo' placeholder='Modelo' pattern='[A-Za-z]{1,40}' required>
<p></p>
 <label>FABRICANTE:</label>
<input type='text' id='fabricante' placeholder='Fabricante' pattern='[A-Za-z]{1,40}' required>
<p></p><input type='button' id='actualiCl'value='Actualizar'></div></center>");
?>
