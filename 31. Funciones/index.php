<?php
    function suma(int $a, int $b)
    {
      return $a + $b;
    }

    function resta(int $a, int $b)
    {
      return $a - $b;
    }

    function dividir(int $a, int $b)
    {
      return $a / $b;
    }

    function multiplicar(int $a, int $b)
    {
      return $a * $b;
    }

    echo "<br>" . suma(10 , 8);
    echo "<br>" . resta(10 , 8);
    echo "<br>" . multiplicar(10 , 8);
    echo "<br>" . dividir(10 , 8);
?>
