<?php
//isset = comprueba si algo se hizo
  if (isset($_POST["enviando"])) {  //Si se pulso el boton "enviando"
    //almaceno en $usuario lo que se haya ingresado
    $usuario = $_POST["nombreUsuario"];
    $edad = $_POST["edadUsuario"];

    //Si el usuario ingresado es juan, puede ingresar
    if ($usuario == "juan" && $edad >= 18) {
      echo "<p class = 'validado'>Puedes entrar</p>";
    }
    else {
      echo "<p class = 'no_validado'> " . "No puedes ingresar</p>";
    }
  }
?>
