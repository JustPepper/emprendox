<?php
session_start();
require_once("conexion.php");

if(isset($_POST["correo"]) && isset($_POST["password"]))
{


$correo = $_POST["correo"];
$clave = $_POST["password"];

$consulta = "SELECT id_usuario, nombres, apellido FROM usuarios WHERE correo='$correo' and clave='$clave'";
$lectura = $con->query($consulta);

if ($lectura->num_rows > 0) 
{
   $row = $lectura->fetch_assoc();
   // saco los datos de los nombres y apellidos
   $nombres = $row['nombres'];
   $apellidos = $row['apellido'];
   $id_usuario = $row['id_usuario'];
   // los convierto en una array y saco el primer nombre
   $str  = preg_replace( "([ ]+)","-",$nombres);
   $arraynom = explode("-",$str);
   $nombre = $arraynom[0];
   // los convierto en un array y saco el primer apellido
   $str  = preg_replace( "([ ]+)","-",$apellidos);
   $arrayape = explode("-",$str);
   $apellido = $arrayape[0];
  
  //defino una sesion y le paso el valor del correo, del primer nombre y del primer apellido
     $_SESSION['id_usuario']=$id_usuario;
     $_SESSION['nombre']=$nombre;
     $_SESSION['apellido']=$apellido;
}
   $con->close();

}
?>
<html>
<body>
<h1>Log In</h1>
<?php
  if(isset($_SESSION['id_usuario']))
  {
  	header ('Location: prueba.php');

  }else
  {
echo '<form method="post"  action="sesion.php">';
echo '<table border="1"';
echo '<tr>';
    echo '<th> Correo </th>';
    echo '<td> <input type="text" name="correo"> </td>';
echo '</tr>';
echo '<tr>';
    echo '<th> Password </th>';
    echo '<td> <input type="password" name="password"> </td>';
echo '</tr>';
echo '<tr>';
   echo '<td colspan="2" align="center">';
   echo '<input type="submit" value="Log In">';
  echo ' </td>';
echo '</tr>';
echo '</table>';
echo '</form>';
}
?>
</body>
</html>