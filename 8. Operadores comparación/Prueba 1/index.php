<?php
  $variable1 = 8;
  $variable2 = "9";
  $variable3 = "Juan";

  //Verdadero si el valor almacenado es igual en las 2 variables.
  if ($variable1 == $variable2) {
    echo "Son iguales";
  }
  else {
    echo "No son iguales";
  }

  //Verdadero si el valor almacenado es igual y tambien sus tipos.
  if ($variable1 === $variable2) {
    echo "Son iguales";
  }
  else {
    echo "<br>No son iguales";
  }

  //Verdadero si las 2 variables no son del mismo tipo
  //y no contienen el mismo valor
  if ($variable1 <> $variable2) {
    echo "Son iguales";
  }
  else {
    echo "<br>No son iguales";
  }


 ?>
