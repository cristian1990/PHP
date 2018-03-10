<?php
    /*CLASES ABSTRACTAS
      -Las clases que deriven de una abstracta deben obligatoriamente utilizar todos sus metodos.
      -No se pueden instanciar.
      -Para declarar un metodo abstracta la clase tambien tiene que serlo.
      -En los metodos abstractos solo se declara la firma, pero no tiene implementacion.
      -Sirven para agrupar atributos, metodos y heredarlos mediante otras clases.
    */
    abstract class Plantilla
    {
      abstract public function IngresarNombre($nom);
      abstract public function ObtenerNombre();

      public static function Mensaje($mens)
      {
        echo $mens;
      }
    }

    #La clase persona, deriva de la clase Plantilla
    class Persona extends Plantilla
    {
      private $mensaje = "Utilizando clases abstractas";
      private $nombre;

      public function Mostrar()
      {
        echo $this->mensaje;
      }

      #Ingreso un parametro opcional
      public function IngresarNombre($nombr, $apell = " Silva")
      {
        $this->nombre = $nombr . $apell;
      }

      public function ObtenerNombre()
      {
        echo $this->nombre;
      }
    }

    /*Accedo a la clase sin instanciarla porque el metodo es static
    Plantilla::Mensaje("Hola mundo"); */

    $pers = new Persona();
    $pers->IngresarNombre("Mi nombre es cristian","Gonzales");
    $pers->ObtenerNombre();
    echo "<br>";
    $pers->Mostrar();

?>
