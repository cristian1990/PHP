<?php
    /*TRAITS
      -Un Traits es similar a una clase, pero con el unico objetivo de agrupar funcionalidades muy especificas y de una manera coherente.
      -Las clases pueden permitir usar tantos traits sean posibles separandolos con (,)
      -No se puede instanciar un trait
      -No pueden utilizarse a traves del objeto (no se heredan)
    */
    trait Persona
    {
      public $nombre;
      public function mostrarNombre()
      {
        echo $this->nombre;
      }

      abstract function asignarNombre($nom);
    }

    trait Trabajador
    {
      protected function mensaje()
      {
        echo "Yo soy un trabajador";
      }
    }

    class Personas
    {
      use Persona, Trabajador;
      public function asignarNombre($nom)
      {
        #Llamamos a la funcion mensaje del trait Trabajador
        $this->nombre = self::mensaje() . $nom;
      }
    }

    $persona = new Personas();
    $persona->asignarNombre(" Juan Perez");
    echo $persona->mostrarNombre();

?>
