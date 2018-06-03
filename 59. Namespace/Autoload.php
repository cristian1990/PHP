<?php
    #Llamamos a la funcion nativa spl_autoload_register() y le agrego una funcion anonima
    #A la funcion anonima le paso como parametro el atributo $nomArchivo
    spl_autoload_register(function($nomArchivo){
        #concateno el nombre del archivo con .php
        $ruta = $nomArchivo.'.php';

        #si el archivo existe entonces
        if(is_readable($ruta)){  //is_readable — Indica si un fichero existe y es legible
            require $ruta;
        }
        else{ //Si el archivo no existe
            die("Archivo no encontrado");
        }
    }); 
?>