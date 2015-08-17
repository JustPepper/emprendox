<?php
 $id_usuario= $_GET["id"];
?>
<html>
<body>
<form method="post" action="anadir.php?id=<?php echo "$id_usuario";?>">
   Nombres:<input type="Text" name="nombres"><br>
   Apellidos:<input type="Text" name="apellidos"><br>
   Contraseña:<input type="password" name="password"><br>
   Confirmar Contraseña:<input type="password" name="confirpassword"><br>
   <input type="Submit" name="enviar" value="Completar Registro">
</form> 
</body>
</html> 