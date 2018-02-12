<?php
    #Colocamos los namespace
    namespace Controlador\vendedor;

    #Heredo del namespace de la clase persona
    use Clases\persona\Persona as apodo; #Si quiero le pongo un apodo a la clase "Persona"

    require_once "Clases/persona.php";
    /*
    Para hacer referencia al objeto utilizamos (this->)
    Para hacer referencia a la clase utilizamos (self::)
    Para hacer referencia a la clase padre utilizamos (parent::)
    */
    //extends sirve para heredar - class ClaseHija extends ClasePadre{}
    class Vendedor extends apodo{ #Agregamos (\) por el namespace
      private $codInterno;
      private $caja;

      public function __construct()
      {
        $this->codInterno = 0;
        $this->caja="";
      }

      public function FechaHijo()
      {
        //Llamamos a la funcion de nuestra clase padre (parent::Fecha())
        $tiempo = parent::Fecha(1994)+25;
        echo "Hijo: Tu edad sera: " . $tiempo . "<br>";
      }

      #Namespace
      public function prueba()
      {
        echo "Controlador/Vendedor";
      }

    }
?>
