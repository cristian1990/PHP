<?php
  /*
  Compara, evalua dos variables del mismo tipo
    retona (-1) si la variable 1 es menor que la variable 2
    retorna (0) variable 1 es igual que la variable 2
    retorna (1) si la variable 1 es mayor que la variable 2
    simbolo  <=>
  */
  $numUno = 10;
  $numDos = 20;
  $resultado = $numUno <=> $numDos;
  if ($resultado == -1) {
    echo $numUno . " es menor que " . $numDos;
  }elseif ($resultado == 1) {
    echo $numUno . " es mayor que " . $numDos;
  }else {
    echo "El valor de las 2 variables es igual";
  }

  echo "<hr>";

  $numTres = 30;
  $numCuatro = 40;
  $resultado2 = $numTres <=> $numCuatro;
  if ($resultado2 == -1) {
    echo $numTres . " es menor que " . $numCuatro;
  }elseif ($resultado2 == 1) {
    echo $numTres . " es mayor que " . $numCuatro;
  }else {
    echo "El valor de las 2 variables es igual";
  }

  echo "<hr>";

  $numCinco = 60;
  $numSeis = 60;
  $resultado3 = $numCinco <=> $numSeis;
  if ($resultado3 == -1) {
    echo $numCinco . " es menor que " . $numSeis;
  }elseif ($resultado3 == 1) {
    echo $numCinco . " es mayor que " . $numSeis;
  }else {
    echo "El valor de las 2 variables es igual";
  }

  echo "<hr>";

  //Con string compara la cantidad de caracteres y la letra si
  //si tiene la misma cantidad
  $palabraUno = '"Profe"';
  $palabraDos = '"Profesor"';
  $resultado4 = $palabraUno <=> $palabraDos;
  if ($resultado4 == -1) {
    echo $palabraUno . " es menor que " . $palabraDos;
  }elseif ($resultado4 == 1) {
    echo $palabraUno . " es mayor que " . $palabraDos;
  }else {
    echo "El valor de las 2 variables es igual";
  }

  echo "<hr>";

  //Tambien se pueden comparar array
  $vectorUno = array(4,5,6);
  $vectorDos = array(10,2,8);
  $comparacion = $vectorUno <=> $vectorDos;
  echo $comparacion;

  //Tambien se pueden comparar array de string
  $vectorTres = array(aaa,bbb,cc);
  $vectorCuatro = array(ccc,ddd,ggg);
  $comparacion2 = $vectorTres <=> $vectorCuatro;
  echo ""$comparacion2;
?>
