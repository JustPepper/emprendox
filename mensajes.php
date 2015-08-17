<?php
require_once("conexion.php");

$id_usuario = "66";
$consulta = "SELECT mensajes.id_remitente FROM usuarios INNER JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario Where usuarios.id_usuario='$id_usuario' GROUP BY id_remitente";
$lectura = $con->query($consulta);

$datos = array();
while($row = $lectura->fetch_array()){
$datos[] = $row;
} 
var_dump($datos);

$suma= count($datos);

//Nombre de los Usuarios que le han dejado el mensaje
$buscar = "SELECT mensajes.remitente_nombre FROM usuarios INNER JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario Where usuarios.id_usuario='$id_usuario' GROUP BY id_remitente";
$leer = $con->query($buscar);

$nombres = array();
while($lineas = $leer->fetch_assoc()){
$nombres[] = $lineas;
} 
var_dump($nombres);


for ($i=0;$i<$suma; $i++) 
 {

   $valore = $datos [$i];
   $query = "SELECT mensajes.descripcion FROM usuarios LEFT JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario Where usuarios.id_usuario='$id_usuario' and mensajes.id_remitente='$valore[0]';";
   $read = $con->query($query);

   $numero = array();
   while($fila = $read->fetch_assoc()){
   $numero[] = $fila;
   }   

   var_dump($numero);
   $contador= count($numero);
   

   echo " Numero de Mensajes: ".$contador;
 }

?>