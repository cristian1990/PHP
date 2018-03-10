<?php
    #Creamos una clase
    class Persona
    {
      #Atributos
      public $nombre = "Cristian";

      #Metodos
      public function Hablar($mensaje)
      {
        echo $mensaje;
      }
    }

    #Instanciamos la clase
    $persona = new Persona();
    echo $persona->Hablar("Hola como estas?"); 
?>
