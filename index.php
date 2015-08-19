<?php 

  /*
   * Archivos de configuración
   * de Emprendox
   */

  require 'config.php';
  require 'helpers.php';
  require "login.php";


  # Controlador para llamar a las vistas
  

  controller($_GET['url'], $con);