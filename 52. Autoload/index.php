<?php
    /*AUTOLOAD
      -Carga una clase automaticamente, la que le indique.
      -Usamos la funcion spl_autoload_register()
    */
    function autocargar($clase)
    {
      include "clases/" . $clase . ".php";
    }

    spl_autoload_register('autocargar');

    Persona::mostrar("Hola mundo <br>");

    Auto::mostrar("Hola mundo");

?>
