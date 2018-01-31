<?php
  //isset = si el usuario pulso el boton
  //$_POST = Variables superglobales
  if (isset($_POST["boton"])) {
    //Almaceno en $numero1 lo que se haya ingresado
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calcular($operacion);
  }
    function calcular($calculo){
      global $numero1;
      global $numero2;
      //Almaceno la operacion ingresada
      if (!strcmp("Suma",$calculo)) {
        echo "El resultado es: " . ($numero1 + $numero2);
      }
      if (!strcmp("Resta",$calculo)) {
        echo "El resultado es: " . ($numero1 - $numero2);
      }
      if (!strcmp("Division",$calculo)) {
        echo "El resultado es: " . ($numero1 / $numero2);
      }
      if (!strcmp("Multiplicacion",$calculo)) {
        echo "El resultado es: " . ($numero1 * $numero2);
      }
      if (!strcmp("Modulo",$calculo)) {
        echo "El resultado es: " . ($numero1 % $numero2);
      }

    }
?>
