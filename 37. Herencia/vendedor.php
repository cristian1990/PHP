<?php
    /*
    Para hacer referencia al objeto utilizamos (this->)
    Para hacer referencia a la clase utilizamos (self::)
    Para hacer referencia a la clase padre utilizamos (parent::)
    */
    //extends sirve para heredar - class ClaseHija extends ClasePadre{}
    class Vendedor extends Persona{
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

    }
?>
