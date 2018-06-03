<?php
#Agregamos los Namespace
namespace Models;

class Persona
{
    #ATRIBUTOS
    private $nombre;
    private $apellido;
    private $dni;
    private $sexo;
    private $localidad;

    #CONSTRUCTOR
    function __construct($nom, $ape, $dn, $sex, $loc)
    {
        $this->nombre = $nom;
        $this->apellido= $ape;
        $this->dni = $dn;
        $this->sexo = $sex;
        $this->localidad = $loc;
    }

    #GETTERS
    protected function getNombre()
    {
        return $this->nombre;
    }

    protected function getApellido()
    {
        return $this->apellido;
    }

    protected function getDni()
    {
        return $this->dni;
    }

    protected function getSexo()
    {
        return $this->sexo;
    }

    protected function getLocalidad()
    {
        return $this->localidad;
    }


    #SETTERS
    protected function setNombre($nom)
    {
        $this->nombre = $nom;
    }

    protected function setApellido($ape)
    {
        $this->apellido = $ape;
    }

    protected function setDni($dn)
    {
        $this->dni = $dn;
    }

    protected function setSexo($sex)
    {
        $this->sexo = $sex;
    }

    protected function setLocalidad($loc)
    {
        $this->localidad = $loc;
    }

}

?>