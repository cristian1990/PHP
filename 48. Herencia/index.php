<?php
    #NO SE PERMITE HERENCIA MULTIPLE
    class Vehiculo
    {
      #Atributos
      public $motor = false;
      public $marca;
      public $color;

      #Metodos
      protected function Estado()
      {
        if($this->motor == true)
        {
          echo "El motor esta encendido <br>";
        }
        else {
          echo "El motor esta apagado <br>";
        }
      }

      public function Encender()
      {
        if ($this->motor == true)
        {
          echo "Cuidado el motor esta encendido! <br>";
        }
        else {
          echo "El motor ahora esta encendido <br>";
          $this->motor = true;
        }
      }
    }

    #Heredamos de la clase Vehiculo
    class Auto extends Vehiculo
    {
      public function estadoAuto()
      {
        #Heredo el metodo pero tengo que acceder desde mi clase
        $this->estado();
      }
    }

    #Heredamos de la clase Vehiculo
    class Moto extends Vehiculo
    {
      public function estadoMoto()
      {
        #Heredo el metodo pero tengo que acceder desde mi clase
        $this->estado();
      }
    }

    #Heredamos de la clase Moto
    class Motoneta extends Moto
    {
      public function estadoMotoneta()
      {
        #Heredo el metodo pero tengo que acceder desde mi clase
        $this->estado();
      }
    }


    echo "------ AUTO ------<br>";
    $auto = new Auto();
    $auto->estadoAuto();
    $auto->Encender();
    $auto->estadoAuto();

    echo "<br>------ MOTO ------<br>";
    $moto = new Moto();
    $moto->estadoMoto();
    $moto->Encender();
    $moto->estadoMoto();

    echo "<br>------ MOTONETA ------<br>";
    $motoneta = new Motoneta();
    $motoneta->estadoMotoneta();
    $motoneta->Encender();
    $motoneta->estadoMotoneta();


?>
