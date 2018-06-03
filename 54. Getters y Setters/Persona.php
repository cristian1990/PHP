<?php

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
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }


    #SETTERS
    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }

    public function setApellido($ape)
    {
        $this->apellido = $ape;
    }

    public function setDni($dn)
    {
        $this->dni = $dn;
    }

    public function setSexo($sex)
    {
        $this->sexo = $sex;
    }

    public function setLocalidad($loc)
    {
        $this->localidad = $loc;
    }

}

?>