<?php
  //Argumentos de funciones
  function sumar($num1, $num2)
  {
    $suma = $num1 + $num2;
    echo "La suma es $suma";
  }
  sumar(10,15);

  echo "<hr>";

  //array
  sumaArray(array(10,2,8,20));

  function sumaArray($entrada)
  {
    $num1 = $entrada[0];
    $num2 = $entrada[1];
    echo "El resultado es: " . ($num1 + $num2);
  }

  echo "<hr>";

  //Funcion por referencia
  function Resta(&$numero)
  {
    $numero = 20 - $numero;
  }
  $resultado = 13;
  Resta($resultado);
  echo "El resultado es: " . $resultado . "<br>";

  //Funcion recursiva
  function recursiva($a)
  {
    if ($a < 20) {
      echo "$a\n";
      recursiva($a + 1);
    }
  }
  echo "<br>Funcion recursiva<br>";
  recursiva(1);
?>
