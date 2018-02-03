<?php
  //Declaraciones de tipo escalar (v.7)
  /*
    Modo coercivo: es el modo por defecto y no necesita ser declarado (por defecto)
      funtion nombre(tipo variable, tipo variable)
      {

      }
    Modo estricto: tiene que ser declarado
      declare(strict_types=1)
      function nombre(tipo variable, tipo variable)
      {

      }
      tipos de datos: int, float, bool, string, interfaces, array, callable
  */

  declare(strict_types=1); //El constructor declare es usado para fijar directivas de ejecución para un bloque de código.

  //Modo coercivo
  function sumar(int $num1, int $num2)
  {
    return $num1 + $num2;
  }
  echo "La suma es: " . sumar(8 , 5);

  echo "<hr>";

  //Modo estricto

  function restar(int $num1, int $num2)
  {
    return $num1 - $num2;
  }
  echo "La resta es: " . restar(40 , 8); //El valor ingresado debe ser un entero si no sale error

  echo "<hr>";

  //Modo estricto, especifico el valor de retorno

  function multiplicar(int $num1, int $num2) : int //el valor de retorno debe ser entero si no sale error
  {
    return $num1 * $num2;
  }
  echo "La multiplicacion es: " . restar(8 , 6);
?>
