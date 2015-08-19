<?php

	# Función para llamar a las vistas
	function view($template, $vars = array()) {

		# Extraer variables de array
		
		extract($vars);

		# Llamar a la vista
		
		require "views/$template.tpl.php";

	}

	# Función para llamar a los controladores ( URL )
	function controller($name, $con) {

		# Redireccionar si la variables está vacía
		if (empty($name)) {
			$name = 'home';
		}

		# Comprobar si el archivo existe
		$file = "controllers/$name.php";

		if (file_exists($file)) {
			require $file;
		} else {
			// Código para llamar a página 404
			header("HTTP/1.0 404 Not Found");
        	exit("Pagina no encontrada");
		}

	}