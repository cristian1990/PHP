<?php
    class Persona
    {
        #Atributos
        public $nombre = array();
        public $apellido = array();

        #Metodos
        public function Guardar($nom, $ape)
        {
          $this->nombre[] = $nom;
          $this->apellido[] = $ape;
        }

        public function Mostrar()
        {
          for($i = 0; $i < count($this->nombre); $i++)
          {
            $this->Formato($this->nombre[$i], $this->apellido[$i]);
          }
        }

        public function Formato($nom, $ape)
        {
          echo "Nombre: " . $nom . " Apellido: " . $ape . "<br>";
        }
    }
        $persona = new Persona();
        $persona->Guardar("Cristian", "Silva");
        $persona->Guardar("Juan", "Perez");
        $persona->Guardar("Mateo", "Ruiz");
        $persona->Guardar("Dante", "Gebel");
        $persona->Guardar("Rebeca", "Villamayor");
        $persona->Guardar("Javier", "Sosa");
        $persona->Mostrar();

?>
