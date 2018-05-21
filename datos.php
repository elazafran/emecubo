<?php 
require "conexion.php";
echo date("d-m-Y H:i:s");
echo "<br>";
$consulta = "SELECT *  FROM medidasensor WHERE nombre = 'T' ORDER BY fecha_medida DESC";

$resultado = $mysqli->query($consulta);
if($consulta->errno) die($consulta->error);
//Ejemplo para imprimir los datos. El bucle recorre todos los registros.
while($fila = $resultado->fetch_assoc()) {
    echo "Fecha de toma: " . $fila['fecha_medida'] . ", Nombre: " . $fila['nombre'] . ", Valor: " . $fila['valor'] . "<br>";
}
echo $result;


?>