<?php
  /*No se deben guardar datos importantes del usuario en el Cookie*/
  $user = "Cristian";
  $pass = "1234";

  if ($_POST['usuario']==$user && $_POST['clave']==$pass)
  {
    #Si los datos son iguales, creamos un Cookie
    #time()+60*60*24*365) = los Cookie aspiran en un año
    setcookie('usuario', $_POST['usuario'], time()+60*60*24*365);
    setcookie('clave', $_POST['clave'], time()+60*60*24*365);
    echo "Cookie Creada";
  }
  else {
    echo "Usuario o contraseña incorrecta";
  }
?>
