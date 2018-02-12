<?php
  #CLASES ANONIMAS = Para crear objetos sencillos y unicos, no se define su nombre.

  #Para poder utilizar sesiones hay que colocar session_start nuevamente
  session_start();

  /*Eliminamos todas las sesiones
  session_destroy();*/

  #Para saber el estado actual de nuestra sesion
  if (session_status()==PHP_SESSION_ACTIVE)
  {
    echo "EXISTE SESION ";
  }

  if (isset($_SESSION['login']))
  {
    echo "Bienvenido sesion " . $_SESSION['login'];
    $_SESSION['login']='nuevoUsuario';
    #Eliminamos un cookie y Borramos el registro de nuestro Cookie
    unset($_COOKIE['usuario']);
    setcookie("usuario", null, 1);

    unset($_COOKIE['clave']);
    setcookie("clave", null, 1);
  }
  else {
    echo "Sin sesion";
  }

  #Chequeamos que la cookie no sea nula
  if (isset($_COOKIE['usuario']))
  {
    echo "Bienvenido cookie " . $_COOKIE['usuario'];
    #Modificamos un Cookie
    setcookie("usuario", "nuevoUsuario");
  }
  else {
    echo " Sin cookie";
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

    <?php
        #Convertimos datos binarios en hexadecimal
        echo bin2hex(random_bytes(4)) . "<br>";
        echo random_int(0, 100) . "<br>";
        #intdiv = da el resto de la division (numeros enteros)
        var_dump(intdiv(20, 2));
        //var_dump(intdiv(20, 0)); ERROR al quererdividir por cero
    ?>
  </body>
</html>
