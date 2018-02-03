<?php
  /*
  comillas dobles ""
  comillas simples ''
  constantes de cadenas
  \n = nueva linea
  \r = retorno de carro
  \t = tabulacion
  \$ = mostrar signo $
  \" = mostrar comillas dobles
  \\ = mostrar barra invertida
  . = simbolo para concatenar
  strlen()
  strpos()
  */

  $palabra = 'Si queremos utilizar "comillas dobles" en un texto';
  $palabra2 = "<br>Si queremos utilizar 'comillas simples' en un texto";
  $palabra3 = "<br>Si queremos utilizar \"comillas dobles\" en un texto de otra manera";
  $palabra4 = "Estos saltos de \nlinea se ven en\n la consola de php";

  echo $palabra;
  echo $palabra2;
  echo $palabra3;

  echo "<hr>";

  $palabra5 = "como estas?";
  echo "Hola Guillermo $palabra5";

  //Otra manera
  echo "<br>Hola Elizabeth {$palabra5} yo estoy bien";

  //La mejor manera es concatenar
  echo "<br>Hola Santiago " . $palabra5;

  //Si cierro entre comillas simples, no funciona
  echo '<br>Hola Milagros {$palabra5} yo estoy bien';

  echo "<hr>";

  //Funcion strlen(), nos especifica la logitud de la cadena
  echo "La cantidad de letras es: " . strlen($palabra5);

  //Funcion strpos(), nos especifica en que posicion se encuentra la cadena
  echo '<br>La posicion de comienzo de la palabra "estas" es: ' . strpos($palabra5, "estas");

  //Extraemos una porcion de texto, imprime lo que extraemos
  echo "<br> " . substr($palabra5, 2, 8);
?>
