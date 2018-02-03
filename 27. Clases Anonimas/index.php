<?php
  interface Registro
  {
    public function Reg(string $mensaje);
  }

  class Aplicacion
  {
    private $registro;

    public function getRegistro() : Registro
    {
      return $this->registro;
    }

    public function setRegistro(Registro $registro)
    {
      $this->registro = $registro;
    }
  }

  $apli = new Aplicacion();
  //Implemento la interface registro
  $apli->setRegistro(new class implements Registro
  {
      public function Reg(string $mensaje)
      {
        echo $mensaje;
      }
  });
  $apli->getRegistro()->Reg("Mi primer mensaje");
?>
