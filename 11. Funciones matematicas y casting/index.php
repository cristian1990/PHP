<?php
  //Buscar las funciones matematicas en la documentacion de PHP

  //rand = numero aleatorio
  $num1 = rand();
  echo "El numero es: " . $num1;

  //numero aleatorio entre 10 y 50
  $num2 = rand(10, 50);
  echo "<br>El numero es: " . $num2;

  //potencia de un numero, 5 a la 3
  $num3 = pow(5, 3);
  echo "<br>El resultado es: " . $num3;

  //Redondear un numero
  $num4 = 5.25;
  echo "<br>El resultado es: " . round($num4);

  //Redondear un numero con 2 decimales
  $num5 = 7.255812;
  echo "<br>El resultado es: " . round($num5, 2);

  //casteo por defecto implicito
  $num6 = "5";
  $num6 += 2; //automaticamente asume que es entero
  $num6 += 3.54; //automaticamente aume que es un float
  echo "<br>El resultado es: " . $num6;

  //casteo explicito
  $num7 = "8";
  $resultado = (int)$num7; //Almacenamos un entero, por ende la variable $resultado lo es.
  echo "<br>El resultado es: " . $num7;

 ?>
