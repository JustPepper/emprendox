<?php
	
	$id_usuario = $_SESSION['id_usuario'];


	# Consulta para ver quien le ha escrito al usuario
	$buscar = "SELECT mensajes.remitente_nombre FROM usuarios INNER JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario Where usuarios.id_usuario='$id_usuario' GROUP BY id_remitente";
	$leer = $con->query($buscar);

	$nombres = array();

	while($lineas = $leer->fetch_assoc()) {
		$nombres[] = $lineas;
	} 


	view('mensajes', compact('con', 'nombres', 'id_usuario'));

