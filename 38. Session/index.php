<?php
  #Para poder utilizar sesiones hay que colocar session_start nuevamente
  session_start();

  /*Eliminamos todas las sesiones
  session_destroy();*/

  #Eliminamos una sesion especifica, unset(Sesion a eliminar)
  unset($_SESSION['login']);

  #Para saber el estado actual de nuestra sesion
  if (session_status()==PHP_SESSION_ACTIVE)
  {
    echo "Existe una sesion ";
  }

  if (isset($_SESSION['login']))
  {
    echo "Bienvenido sesion " . $_SESSION['login'];
  }
  else {
    echo "Sin sesion";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Creamos un formulario-->
    <form action="loginSession.php" method="post">
      Usuario:<input type="text" name="usuario"/> <br>
      Contraseña:<input type="password" name="clave"/> <br>
      <input type="submit" name="boton"/> <br>
    </form>
  </body>
</html>
