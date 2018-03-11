<?php
    /*AUTOLOAD (Auto)
      -Carga una clase automaticamente, la que le indique.
      -Usamos la funcion spl_autoload_register()
    */
    class Auto
    {
      public function mostrar($mensaje)
      {
        echo "El auto esta diciendo: " . $mensaje;
      }
    }

?>
