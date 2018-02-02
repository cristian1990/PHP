<?php
  //variable booleana
  $variable1 = true;
  $variable2 = false;
  //almacena en $resultado false
  $resultado = $variable1 && $variable2; //si las 2 variables son true, almacena true

  if ($resultado == true) {
    echo "Correcto";
  }
  else {
    echo "Incorrecto";
  }

  $resultado2 = $variable1 and $variable2; //almacena el resultado de la primera variable

  if ($resultado2 == true) {
    echo "<br>Correcto";
  }
  else {
    echo "Incorrecto";
  }
?>
