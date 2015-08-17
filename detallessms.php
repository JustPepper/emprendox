<?php
require_once("conexion.php");

$consulta = "SELECT mensajes.hora as hora,usuarios.id_usuario, mensajes.id_remitente, mensajes.remitente_nombre as nomremitente, mensajes.descripcion as descripcion, mensajes.fecha_enviado as fecha FROM usuarios LEFT JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario Where usuarios.id_usuario='66' OR  usuarios.id_usuario='67 'and mensajes.id_remitente='67' OR mensajes.id_remitente='66' Order by mensajes.hora;";
$lectura = $con->query($consulta);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h3>Listado de Mensajes de Diana Benedictis</h3>
<form action="insertarsms.php" method="post" name="forml"> 
<table width="600" border="0" cellspacing="2" cellpadding="5">
  <tr>
    <th align="left">Chat: Marlon Arciniegas</th>
  </tr>

  <tr>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>fecha</th>
    <th>Hora</th>
  </tr>
  <?php while ($lineas = $lectura->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $lineas['nomremitente']; ?></td>
    <td><?php echo $lineas['descripcion']; ?></td>
    <td><?php echo $lineas['fecha']; ?></td>
    <td><?php echo $lineas['hora']; ?></td>
  </tr>
   <?php } ?>
  <tr>
            <td><textarea name="mensaje" id="mensaje" cols="30" rows="2"></textarea></td>
            <td><input type="submit" name="enviar" id="enviar" value="Responder"></td>
  </tr> 
</table>
</form> 
</body>
</html>


