<?php
    /*MODIFICADORES DE ACCESO
      public = Accesible desde cualquier clase
      private = Solo accesible desde la misma clase
      protected = Accesible desde la clase padre y las clases derivadas.
    */
    class Facebook
    {
        #Atributos
        public $nombre;
        public $edad;
        private $clave;

        #Metodos
        public function __construct($nom, $eda, $cla)
        {
          $this->nombre = $nom;
          $this->edad = $eda;
          $this->clave = $cla;
        }

        public function VerInformacion()
        {
          echo "Nombre: " . $this->nombre . "<br>";
          echo "Edad: " . $this->edad . "<br>";
          #Debo llamar al metodo aqui porque el metodo es private.
          $this->CambiarClave("88985454");
          echo "Contraseña: " . $this->clave . "<br>";
        }

        private function CambiarClave($contra)
        {
          $this->clave = $contra;
        }
    }

    $face = new Facebook("Cristian Silva", 28, "1234");
    $face->VerInformacion();
    /*Muestra un ERROR porque el atributo es private
    echo $face->clave;*/
?>
