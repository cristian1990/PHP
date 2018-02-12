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
        #Creamos un array asociativo
        $arreglo=array("nombre"=>"cristian", "apellido"=>"silva", "nacionalidad"=>"argentina", "edad"=>28, "hombre"=>true);
        #Serializamos
        $cadena=serialize($arreglo);
        echo $cadena . "<br>";
        $arreglo2=unserialize($cadena);
        var_dump($arreglo2) . "<br>";

        #Con objetos
        require_once "Clases/persona.php";
        use Clases\persona\Persona as personisima;

        $persona = new personisima;
        $persona->setNombre("Cristian");
        #Serializamos
        $datos=serialize($persona);
        var_dump($datos) . "<br>";
        #Deserializamos
        $listaBlanca=["Clases\persona\Persona"];
        #Especifico la clase que quiero deserializar (mas seguridad)
        $objeto=unserialize($datos, ['allowed_clases'=>$listaBlanca]);
        var_dump($objeto->getNombre());
    ?>
  </body>
</html>
