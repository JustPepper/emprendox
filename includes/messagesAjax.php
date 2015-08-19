<?php 

  define('DB_SERVER','localhost');
  define('DB_NAME','emprendox');
  define('DB_USER','root');
  define('DB_PASS','');

  $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

  $usuario_id = $_GET['usuario_id'];
  $remitente_id = $_GET['remitente_id'];

  # Consulta para leer los mensajes 
  $consulta = "SELECT mensajes.hora as hora,usuarios.id_usuario, mensajes.id_remitente, 
               mensajes.remitente_nombre as nomremitente, mensajes.descripcion as descripcion, 
               mensajes.fecha_enviado as fecha FROM usuarios LEFT JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario 
               Where usuarios.id_usuario='$usuario_id' OR  usuarios.id_usuario='$remitente_id 'and mensajes.id_remitente='$remitente_id' 
               OR mensajes.id_remitente='$usuario_id' Order by mensajes.fecha_enviado, mensajes.hora";
  $lectura = $con->query($consulta);

?>

<?php while ($lineas = $lectura->fetch_assoc()) { ?>
  <div class="recievedMessage">
    <div class="recievedMessage-photo"><img src="/public/img/diana.jpeg" alt=""/></div>
    <div class="recievedMessage-message">
      <div class="recievedMessage-name">
        <h1><?= $lineas['nomremitente']; ?></h1>
      </div>
      <p><?= $lineas['descripcion']; ?></p>
    </div><span><?= $lineas['hora']; ?></span>
  </div>
<?php } ?>

   <!-- ENVIAR MENSAJE -->

  <div class="sendMessage">
    <form action="insertar" method="post" name="forml"> 
    <textarea name="mensaje" cols="30" rows="10"></textarea>
    <button name="enviar"> Enviar Mensaje</button>
  </div>