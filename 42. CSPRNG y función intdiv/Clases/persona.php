<?php
    #En la herencia si le ponemos namespace a la clase padre, tambien tenemos
    #que ponerle a la clase hija.
    namespace Clases\persona;

    class Persona {
      private $nombre;
      private $apellido;
      public static $miStatic = 2017;

      public function __construct() //Metodo magico
      {
        //Inicializamos las variables sin "$"
        $this->nombre = "";
        $this->apellido = "";
      }

      /*Creamos los SET y GET con metodos magicos
      public function __set($propiedad, $valor)
      {
        $this->$propiedad = $valor;
      }

      public function __get($propiedad)
      {
        return $this->$propiedad;
      }
      */

      //Otra forma
    //Forzamos que regrese un tipo string
    public function getNombre() : string
    {
        return $this->nombre;
    }

    //Forzamos que se ingrese un tipo string
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApellido() : string
    {
        return $this->apellido;
    }


    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }

    public function ObtenerEdad($fec)
    {
      echo "Padre: tu edad es: " . $this->Fecha($fec) . "<br>";
    }

    protected function Fecha($fec)
    {
      //self:: cuando queremos llamar a la variable estatica dentro de la misma clase
      return self::$miStatic-$fec;
    }

    //Creamos un destructor
    public function __destruct()
    {
      echo "Se termino<br>";
    }

}

?>
