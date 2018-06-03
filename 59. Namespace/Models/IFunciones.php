<?php
    #Agregamos los Namespace
    namespace Models;
    
    interface IFunciones{
        function Registrar();
        function Actualizar();
        function Eliminar();
        function Listar();
        function buscarPorCodigo();
    }
?>