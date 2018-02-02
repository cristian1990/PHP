<?php
  //Tablas de multiplicar
  for ($i=0; $i < 10; $i++) {
    for ($j=0; $j < 10; $j++) {
      $producto = $i * $j;
      echo $i . "x" . $j . " = " . $producto . "<br>";
    }
    echo "<hr>";
  }

  //Imprimimos nombres
  $arreglo = array("jose", "carlos", "pedro", "cesar");

  for ($i=0; $i < count($arreglo) - 1; $i++) {
    echo $arreglo[$i] . "<br>";
  }
?>
