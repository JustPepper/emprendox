 <?php

   //incluimos la conexion a mysqlserver
   require_once("/conexion.php");
   //incluimos la funcion   que valida si el email escrito es valido
   require_once("/funcion.php");

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
      $message .= "Debes activar tu cuenta pulsando este enlace: http://localhost:8080/confirmar?codigo=$aleatorio"; 

      if(mail($correo, $subject, $message, $headers)){
            //Solo establecemos esta variable si el envio fue exitoso
              header('Location: enviado');
            }
            else
            {
               echo "El envio ha fallado, porfavor contacte al administrador sobre este problema";
            }

        }
       } 
      }



    view('registro');

