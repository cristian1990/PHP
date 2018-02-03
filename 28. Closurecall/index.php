<?php
  //Closure call = Vincula temporalmente el cierre a newthis, y lo llama con
  //cualquier parámetro dado.(nuevo en php7)

  class Persona
  {
    private $edad = 20;

    public function saludar(string $nombre)
    {
      echo "Hola $nombre";
    }
  }

  $valor = function($nombre)
  {
    return $this->saludar($nombre);
  };

  $edad = function()
  {
    return $this->edad;
  };

  echo $valor->call(new Persona, "Jose");
  echo "<br>";
  echo $edad->call(new Persona);
?>
