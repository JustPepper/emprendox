<?php

	$id_usuario = "67"; // este el id al que va el mensaje que es marlon
	$estado="No Leido";
	$fecha = date('Y/m/d');
	$remitente_nombre="Marlon Arciniegas"; // este es que esta logeado  con  $_SESSION
	$id_remitente="66"; // este es el que esta logeado con  $_SESSION 
	$destinatario_nombre="Diana Benedictis"; // al que va el mensaje
	$hora = date('G:i:s');

	if(isset($_POST['enviar'])) {

	   if(isset($_POST['mensaje'])) {

		   $mensaje=$_POST['mensaje'];

		   $insertar ="Insert Into mensajes (descripcion, estado, fecha_enviado, hora, remitente_nombre, id_remitente, destinatario_nombre, id_usuario)";
		   $insertar.="VALUES('".$mensaje."', '".$estado."', '".$fecha."', '".$hora."','".$remitente_nombre."', '".$id_remitente."', '".$destinatario_nombre."', '".$id_usuario."')";
		   $read = $con->query($insertar);

		   header('Location: mensajes');

	   }
	}

