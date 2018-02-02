<?php
  //isset = comprueba si algo se hizo
  //$_POST = variable super global
  if (isset($_POST["enviando"])) {  //Si se pulso el boton "enviando"
    //almaceno en $usuario lo que se haya ingresado
    $usuario = $_POST["nombreUsuario"];
    $edad = $_POST["edadUsuario"];

    //Si el usuario ingresado es juan, puede ingresar
    if ($edad <= 18) {
      echo "<p class = 'validado'>Eres menor de edad</p>";
    }
    else if($edad >= 19 && $edad <= 40){
      echo "<p class = 'no_validado'> " . "Eres joven</p>";
    }else {
      echo "Eres adulto";
    }
  }
?>
