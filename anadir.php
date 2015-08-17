<?php 
 //incluimos la conexion a mysqlserver
 require_once("conexion.php");
//recibimos el id pasado por la variable
$id= $_GET["id"];

//comprobamos si existen los datos pasados por Post
 if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['password'])){
    // process form
    $nombres = $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $password= $_POST['password'];
    $confirpassword= $_POST['confirpassword'];

    //editamos los datos del usuario a la base de datos
    var_dump($id, $nombres, $apellidos, $password, $confirpassword);
    //insertamos y mandamo el query a la base de datos
    $sql = "UPDATE usuarios SET nombres='$nombres', apellido='$apellidos',".
      " clave='$password' WHERE id_usuario=".$id;
    $con->query($sql);
    echo "¡Gracias! Hemos recibido sus datos.\n"; 
 } 
?> 














