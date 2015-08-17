 <?php
 //incluimos la conexion a mysqlserver
 require_once("conexion.php");
 //incluimos la funcion   que valida si el email escrito es valido
 require_once("funcion.php");

if(isset($_POST['Enviar']))
{
   if(isset($_POST['mail']) && valid_email($_POST['mail'])==TRUE)
   {

$consulta = "SELECT codigo FROM usuarios";
$lectura = $con->query($consulta);
$datos = array();
while($row = $lectura->fetch_assoc()){
$datos[] = $row;
} 
//sumamos los datos para poder realizar el ciclo for
$suma = count($datos);
//generamoa el codigo aleatorio
$aleatorio = uniqid();
//declaramos la condicion FALSE
$condicion=FALSE;

//realizamos el ciclo for
for ($i=0;$i<$suma; $i++) 
 {

    $valore = $datos [$i];

  if($aleatorio == $valore['codigo']){
      $condicion=TRUE;
      break;
   }
 }

if ($condicion==TRUE) {

  echo "Por Motivos de Seguridad Vuelva a escribir su Correo y proceda a enviar";
  
  }else{

     $correo = $_POST['mail'];
     $fecha = date('Y/m/d');
     //Insertamos los datos temporales en la tabla usuarios antes de la confirmacion del correo desde el e-mail  
     $insertar = "Insert Into usuarios (correo, codigo, fecha_expiracion)";   
     $insertar.= "VALUES('".$correo."','".$aleatorio."','".$fecha."')";
     $con->query($insertar);

//Componemos el mensaje
$headers  = "From: tucorreo@tudominio.com \r\n";
$headers .= "Reply-To: tudominio@tudominio.com \r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$subject  = "Activacion de tu cuenta en Emprendox";
$message  = "Confirma tu Registro de Usuarios en Emprendox.com\n\n"; 
$message .= "Debes activar tu cuenta pulsando este enlace: http://localhost:8080/logeo/activacion.php?codigo=$aleatorio"; 

if(mail($correo, $subject, $message, $headers)){
      //Solo establecemos esta variable si el envio fue exitoso
        header('Location: enviado.php');
      }
      else
      {
         echo "El envio ha fallado, porfavor contacte al administrador sobre este problema";
      }

  }
 } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Document</title>
  <link rel="stylesheet" href="/views/css/main.css"/>
</head>
<body>
  <svg style="display:none;">
    <symbol id="mail" viewBox="0 0 20 20">
      <path d="M17.5 6h-16c-0.827 0-1.5 0.673-1.5 1.5v9c0 0.827 0.673 1.5 1.5 1.5h16c0.827 0 1.5-0.673 1.5-1.5v-9c0-0.827-0.673-1.5-1.5-1.5zM17.5 7c0.030 0 0.058 0.003 0.087 0.008l-7.532 5.021c-0.29 0.193-0.819 0.193-1.109 0l-7.532-5.021c0.028-0.005 0.057-0.008 0.087-0.008h16zM17.5 17h-16c-0.276 0-0.5-0.224-0.5-0.5v-8.566l7.391 4.927c0.311 0.207 0.71 0.311 1.109 0.311s0.798-0.104 1.109-0.311l7.391-4.927v8.566c0 0.276-0.224 0.5-0.5 0.5z"></path>
    </symbol>
  </svg>
  <div class="signUp">
    <div class="signUp-wrapper">
      <div class="signUp-wrapper--img"><img src="views/img/emprendox-logo.svg" alt=""/></div>
      <div class="signUp-wrapper--form">
        <form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
          <p>
            <label>
              <svg>
                <use xlink:href="#mail"></use>
              </svg>
            </label>
            <input type="text" name="mail" id="mail" placeholder="correo@ejemplo.com"/>
          </p>
          <button name="Enviar" id="Enviar">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


