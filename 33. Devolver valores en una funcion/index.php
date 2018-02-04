<?php
  //Regresar un valor en una funcion
  function Resta($num)
  {
    return $num - 10;
  }
  echo Resta(40);

  echo "<hr>";

  //Es importante no olvidar de ingresar los parametros
  //Para evitar esto existen los valores predeterminados
  function Comprar($producto = "Azucar")
  {
    return "El producto es: " . $producto;
  }
  echo Comprar() . "<br>";
  echo Comprar(null) . "<br>";
  echo Comprar("Tallarines");

  echo "<hr>";

  //podemos dejar valores vacios a partir de la derecha
  //Si lo dejamos a la izquierda este se va a recorrer
  function Persona($nombre = "cristian", $apellido = "silva", $edad = 28)
  {
    return "Bienvenido $nombre $apellido de $edad años";
  }
  echo Persona("Cristian", "Silva", 18);

  echo "<hr>";

  //Array con valores predeterminados.
  //implode = Une elementos de un array en un string.
  function Animales($animales = array("Animal 1", "Animal 2"), $tipo = ("Sin tipo"))
  {
    return "Los animales son: " . implode(",",$animales) . " son de tipo " . "$tipo . <br>";
  }

  echo animales();
  echo animales(array("gato", "tigre"), "felinos");

  echo "<hr>";

  //Enviar multiples valores
  function Flores()
  {
    $flor = "Clavel";
    $color = "morado";
    $cantidad = 10;
    return array($flor, $color, $cantidad);
  }
  list($varFlor, $varColor, $varCantidad) = Flores();
  echo "Hola soy un $varFlor mi color es $varColor y somos $varCantidad";

?>
