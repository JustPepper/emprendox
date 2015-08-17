<?php
session_start();
require_once("conexion.php");

if(isset($_POST["correo"]) && isset($_POST["password"]))
{


$correo = $_POST["correo"];
$clave = $_POST["password"];

$consulta = "SELECT id_usuario, foto, nombres, apellido FROM usuarios WHERE correo='$correo' and clave='$clave'";
$lectura = $con->query($consulta);

if ($lectura->num_rows > 0) 
{
   $row = $lectura->fetch_assoc();
   // saco los datos de los nombres y apellidos
   $nombres = $row['nombres'];
   $apellidos = $row['apellido'];
   $id_usuario = $row['id_usuario'];
   $foto = $row['foto'];
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
     $_SESSION['foto'] = $foto;
}
   $con->close();

}
?>

<?php include 'includes/header.php' ?>

  <div class="siteWrapper">
    <div class="searchBox u-flex-center">
      <div class="searchBox-wrapper">
        <div class="searchBox-tabs">
          <div class="u-flex-center">
            <label>Negocios</label>
          </div>
          <div class="u-flex-center">
            <label>Franquicias</label>
          </div>
        </div>
        <div class="searchBox-input">
          <label>
            <svg>
              <use xlink:href="#lens"></use>
            </svg>
          </label>
          <input type="text" placeholder="Tipo, Ciudad, Precio"/>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php' ?>