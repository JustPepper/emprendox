<?php

	$codigo = $_GET["codigo"];
	$consulta= "SELECT id_usuario, codigo, fecha_expiracion FROM usuarios where codigo='$codigo'";
	$lectura = $con->query($consulta);

	$row = $lectura->fetch_assoc();
	$fecha_caduca = $row['fecha_expiracion'];
	$id_usuario= $row['id_usuario'];

	var_dump($fecha_caduca, $codigo);

	$query ="SELECT Datediff(now(), '$fecha_caduca') as Fecha";
	$read = $con->query($query);

	$fila = $read->fetch_array();
	$fecha = $fila[0];

	var_dump($fecha);

	if ($fecha > 7) {
	    echo "Su Enlace a Caducado....Vuelva a Registrarse..!"; 
	    header ("Refresh:2; registro");
	    exit();
	} else {
	    header("Location: actualizar?id=$id_usuario");
	}
