<?php
require_once("conexion.php");

$consulta = "SELECT * FROM anunciosnegocios";
$lectura = $con->query($consulta);

$datos = array();
while($row = $lectura->fetch_array()){
$datos[] = $row;
} 
$miarray =$datos[0];
var_dump($miarray['precio']);
?>
