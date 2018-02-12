<?php
  
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
        //Para que no haya error hay que solucionarlo con namespace
        require_once "Clases/vendedor.php";
        require_once "Controlador/vendedor.php";
        require_once "Clases/persona.php";

        #Especificamos que queremos la clase vendedor dentro del archivo vendedor de la carpeta controlador (use)
        use Controlador\vendedor\Vendedor;
        #Especificamos que queremos la clase Vendedor dentro del archivo vendedor de la carpeta Clases (use)
        use Clases\vendedor\Vendedor as Vender; #Renombramos la clase (as)
        #Especificamos que queremos la clase Persona dentro del archivo persona de la carpeta Clases (use)
        use Clases\persona\Persona as Personita;  #Renombramos la clase (as)

        /*PODEMOS AGREGAR LOS NAMESPACE EN GRUPOS
        use Clases\{vendedor\Vendedor as Vender, persona\Persona as Personita}; */

        $vendedor = new Vendedor();
        $vendedor->prueba();
        echo "<br>";
        $vendedor2 = new Vender();
        $vendedor2->prueba();
        echo "<br>";
        $persona = new Personita();
        $persona->ObtenerEdad(1985);
    ?>
  </body>
</html>
