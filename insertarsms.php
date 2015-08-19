<?php
require_once ("conexion.php");

$id_usuario = "67"; // este el id al que va el mensaje que es marlon
$destinatario_nombre="Josue MAridueña"; // al que va el mensaje
$id_remitente="5"; // este es el que esta logeado con  $_SESSION 
$remitente_nombre="Diana Benedictis"; // este es que esta logeado  con  $_SESSION
$estado="No Leido";
$fecha = date('Y/m/d');

$hora = date('G:i:s');

var_dump($id_usuario, $estado, $fecha, $remitente_nombre, $id_remitente, $destinatario_nombre);
if(isset($_POST['enviar']))
{
   if(isset($_POST['mensaje']))
   {

   $mensaje=$_POST['mensaje'];

   $insertar ="Insert Into mensajes (descripcion, estado, fecha_enviado, hora, remitente_nombre, id_remitente, destinatario_nombre, id_usuario)";
   $insertar.="VALUES('".$mensaje."', '".$estado."', '".$fecha."', '".$hora."','".$remitente_nombre."', '".$id_remitente."', '".$destinatario_nombre."', '".$id_usuario."')";
   $read = $con->query($insertar);

   var_dump($mensaje);

   header('Location: detallessms.php');

   }
}
?>
