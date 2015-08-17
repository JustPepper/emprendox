<?php 

	$tamaño = "grande";
	$var_array = array("color" => "azul",
                   "tamaño"  => "medio",
                   "forma" => "esfera");
	extract($var_array);


	var_dump($_COOKIE);
?>