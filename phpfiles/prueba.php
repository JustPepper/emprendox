<?php

    $valor = 'Andres Naranjo';
    $var = str_replace(" ",",", $valor); 
    $array = explode(",", $var);
    $nombre =$array[1];
    echo "$nombre<br>"; 
?>

