<?php
    //Funciones anonimas
    $saludo = function ($nombre)
    {
      echo $nombre;
    };

    $suma = function($num1, $num2)
    {
      return $num1 + $num2;
    };
    echo "La suma es: " . $suma(8,9);

    echo "<hr>";

    //Funciones variables
    function Saludar($saludo)
    {
      echo "<br>Soy la variable function $saludo";
    }

    $variable = 'Saludar'; //Trabaja como la funcion saludar

    echo $variable("Hola");

    echo "<hr>";

    //Funciones internas de PHP
    //saber si la funcion array_filter es de php
    if (function_exists('array_filter'))
    {
      echo "La funcion existe";
    }else
    {
      echo "La funcion no existe";
    }

    echo "<hr>";
    
    //saber todas las funciones del modulo XMLDiff\Base
    print_r(get_extension_funcs("xml"));

?>
