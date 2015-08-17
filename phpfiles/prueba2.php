<?php

$cadena = "hola                                          mundo mariduena";
$str  = preg_replace( "([ ]+)","-",$cadena);
$salida = explode("-",$str);
var_dump($salida);

$nombre =$salida[1];
 echo "$nombre<br>"; 

?>

