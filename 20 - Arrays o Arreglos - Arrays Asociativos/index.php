<?php
  /*
  TIPOS DE ARRAY
    Numericos
    Asociativos (indice => valor)
    Multidimensionales
  */

  //Array asociativo, no es numerico
  $arreglo = array("Nombre: " => "Jose" , "Apellido: " => "Silva", "Nacimiento: " => "1990");
  //print_r($arreglo);  Imprime todo el contenido
  //print_r($arreglo[Apellido]);  Imprime el contenido del indice "Apellido"
  foreach ($arreglo as $key => $valor) {
    echo $key . $valor . "<br>";
  }
?>
