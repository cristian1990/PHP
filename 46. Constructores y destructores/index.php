<?php
    /*SON METODOS MAGICOS DE PHP
      __construct: Al instanciar la clase el metodo se ejecuta al comienzo de manera automatica. (debe ser publico y sin retorno).
      __destruct: Este metodo tambien se ejecuta automaticamente pero al final de la clase. (debe ser publico y sin retorno).
    */
    class Loteria
    {
      #Atributos
      public $numero;
      public $intentos;
      public $resultados = false;

      #Metodos
      public function __construct($num, $inte)
      {
        $this->numero = $num;
        $this->intentos = $inte;
      }

      public function Sortear()
      {
        #Al numero recibido lo divido y multiplico por 2
        $minimo = $this->numero / 2;
        $maximo = $this->numero * 2;
        for ($i=0; $i < $this->intentos; $i++)
        {
          #Creo un numero aleatorio
          $numRandom = rand($minimo, $maximo);
          $this->Intentos($numRandom);
        }
      }

      public function Intentos($intento)
      {
        if ($intento==$this->numero) {
          echo "<b>" . $intento . "==" . $this->numero . "</b><br>";
          $this->resultados = true;
        }
        else {
          echo $intento . "!=" . $this->numero . "<br>";
        }
      }

      public function __destruct()
      {
        if ($this->resultados == true) {
          echo "Felicidades, has ganado en " . $this->intentos . " intentos";
        }
        else {
          echo "Que pena, has perdido en " . $this->intentos . " intentos";
        }
      }
    }

    #Instanciamos la clase y debemos colocar los parametros porque es lo que pide el constructor
    $loteria = new Loteria(10, 5);
    $loteria->Sortear();


?>
