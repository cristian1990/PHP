<?php

    #La clase cliente deriva de persona
    class Empleado extends Persona implements IFunciones
    {
        private $persona;
        private $usuario;
        private $contrasenia;

        #Creo una variable de tipo persona
        function __construct(Persona $pers, $usuar, $contr)
        {
            $this->persona = $pers;
            $this->usuario = $usuar;
            #Encripto la contraseña con password_hash
            $this->contrasenia = password_hash($contr, 1);
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
            $resultado.= $this->usuario;
            $resultado.= $this->contrasenia;

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