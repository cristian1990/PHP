<?php
    /*INTERFACES
      - Especificamos que metodos deben ser implementados en una clase.
      - Son definidas utilizando la palabra reservada "interface".
      - Todos los metodos declarados en una interface deben ser PUBLICOS.
      - Las clases que deriven de interface deben obligatoriamente utilizar sus metodos.
      - Para implementar una interface se utiliza el operador "implements"
      - Una clase puede implementar mas de una interface separandolas por (,).
    */

    #Creamos la interface
    interface Auto
    {
      public function Encender();
      public function Apagar();
    }

    interface Gasolina extends Auto
    {
      public function VaciarTanque();
      public function LlenarTanque($cantidad);
    }

    #Solo heredamos de Gasolina porque esta ya deriva de Auto.
    class Deportivo implements Gasolina
    {
      private $estado = false;
      private $tanque = 0;

      public function Estado()
      {
          if ($this->estado == true)
          {
            echo "El auto esta encendido y tiene " . $this->tanque . " de litros en el tanque";
          }
          else {
            echo "El auto esta apagado <br>";
          }
      }

      #Implementamos todas las interfaces, incluso de las derivadas
      public function VaciarTanque()
      {
        $this->tanque = 0;
      }

      public function LlenarTanque($cant)
      {
        $this->tanque = $cant;
      }

      public function Encender()
      {
          if ($this->estado == true)
          {
            echo "No puedes encender el auto 2 veces <br>";
          }
          else {
            if ($this->tanque<=0)
            {
              echo "Ustede no puede encender el auto porque el tanque esta vacio";
            }else {
              echo "Auto encendido <br>";
              $this->estado = true;
            }
          }
      }

      public function Apagar()
      {
        if ($this->estado == true)
        {
          echo "Auto apagado <br>";
          $this->estado = false;
        }
        else {
          echo "El auto ya esta apagado <br>";
        }
      }

      public function Usar($km)
      {
        if ($this->estado == true)
        {
          $reducir = $km /3;
          $this->tanque = $this->tanque - $reducir;
          if ($this->tanque <=0)
          {
            $this->estado = false;
          }
        }
        else {
          echo "El auto esta apagado y no se puede usar <br>";
        }
      }
    }

    $obj = new Deportivo();
    $obj->LlenarTanque(100);
    $obj->Encender();
    $obj->Usar(100);
    $obj->Estado();
?>
