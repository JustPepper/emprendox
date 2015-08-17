<?php

$arr = preg_split("/[\s]+/", "separar                    por\nespacios y salto de\nlineas"); 
for($i=0;$i<count($arr);$i++) echo $arr[$i].'<br>'; 


var_dump($arr);

?>
