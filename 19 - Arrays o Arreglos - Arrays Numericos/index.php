<?php
  /*
  TIPOS DE ARRAY
    Numericos
    Asociativos (indice => valor)
    Multidimensionales
  */

  //ARRAY NUMERO
  //Un array puede contener multiples tipos, se agrupan por indices
  $numeros = array(2, "jose", 2.894, 7);
  //print_r($numeros); Muestro la informacion entera
  $numeros[1] = "Guillermo";  //Cambio el valor del indice 1
  foreach ($numeros as $valor) {
    echo  $valor . "<br>";
  }
?>
