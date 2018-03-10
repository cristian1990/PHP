<?php
    /*
    Un metodo estatico puede llamarse sin instanciar una clase
    Una propiedad estatica debe ser accedida por un metodo estatico
    NO se utiliza kla palabra reservada "this", se puede usar (self::) o el nombre de la clase
    Cuando queramos acceder a una constante o método estático desde dentro de la clase, usamos la palabra reservada: self.
    Clase::MetodoEstatico() {}
    */
    class Pagina
    {
      #Atributos
      public $nombre = "Cristian Raul";
      public static $apellido = "Silva";
      public static $url = "www.google.com.ar";

      #Metodos
      public function Bienvenida()
      {
        echo "Bienvenidos a mi pagina a <b>" . $this->nombre . "<br> la pagina es <b>". self::$url . "<br>";
      }

      public static function Mensaje()
      {
        #Solo puedo acceder a un atributo estatico desde un metodo estatico
        echo "Hola como estas " . self::$apellido . "<br><br>";
      }
    }

    #Heredo de la clase Pagina
    class Web extends pagina
    {

    }

    $pagina = new Pagina();
    $pagina->Bienvenida();

    $web = new Pagina();
    $web->Bienvenida();

    Pagina::Mensaje();
?>
