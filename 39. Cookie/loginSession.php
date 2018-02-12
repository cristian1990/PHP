<?php
  $user = "Cristian";
  $pass = "1234";
  /*session_start(): Iniciar una nueva sesión o reanudar la existente
  para almacenar informacion del lado del servidor*/
  session_start();
  if ($_POST['usuario']==$user && $_POST['clave']==$pass)
  {
    #Si los datos son iguales, creamos una sesion
    $_SESSION['login']='administrador';
    echo "session creada";
  }
  else {
    echo "Usuario o contraseña incorrecta";
  }
?>
