<?php
  //Se utiliza para arreglos u objetos
  $vector = array(1,2,3,4,5,6,7,8,9);

  foreach ($vector as $numeros) {
    echo "Los numeros son: $numeros <br>";
  }

  echo "<hr>";

  //Array asociativo
  $vector2 = array("Nombre: " => "jose", "Direccion: " => "moreno 3280", "Edad: " => "28");

  foreach($vector2 as $datos)
  {
    echo $datos . "<br>";
  }

  echo "<hr>";

  //Mostrar lo datos con su clave
  foreach ($vector2 as $key => $datos) {
    echo "{$key}  {$datos} <br>";
  }

  echo "<hr>";

  //Array multidimensional
  $multi = array(array(1,2,3,4,5), array("Jose","Luis","Carlos"));

  foreach($multi as $indice)
  {
    foreach($indice as $dato)
    {
      echo $dato ."<br>";
    }
  }

?>
