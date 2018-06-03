<?php

    #La clase cliente deriva de persona
    class Cliente extends Persona implements IFunciones
    {
        private $persona;
        private $paginaWeb;

        #Creo una variable de tipo persona
        function __construct(Persona $pers, $paginaW)
        {
            $this->persona = $pers;
            $this->paginaWeb = $paginaW;
        }

        #Creo una funcion para acceder a los metodos de Persona
        public function getDatos()
        {
            # ".=" Para concatenar
            $resultado = $this->persona->getNombre() . " - ";
            $resultado.= $this->persona->getApellido(). " - ";
            $resultado.= $this->persona->getDni(). " - ";
            $resultado.= $this->persona->getSexo(). " - ";
            $resultado.= $this->persona->getLocalidad(). " - ";
            $resultado.= $this->paginaWeb;
            return $resultado;
        }

        function Registrar(){

        }

        function Actualizar(){

        }

        function Eliminar(){

        }

        function Listar(){

        }
        
        function buscarPorCodigo(){

        }
    }
    
?>