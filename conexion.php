<?php
 
// datos para la coneccion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','emprendox');
define('DB_USER','root');
define('DB_PASS','');
 
    $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    if ($con===false)
    {
      die("Error no se pudo establecer la conexion" .mysqli_connect_error());
    }
    $con->select_db(DB_NAME);
?>