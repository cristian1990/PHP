<?php
    /*AUTOLOAD (Persona)
      -Carga una clase automaticamente, la que le indique.
      -Usamos la funcion spl_autoload_register()
    */
    class Persona
    {
      public function mostrar($mensaje)
      {
        echo "La persona esta diciendo: " . $mensaje;
      }
    }

?>
