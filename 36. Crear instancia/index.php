<?php
  /*Hay 4 maneras de incluir un archivo.
    include (Si no encuentra el archivo continua ejecutando)
    require (Si no encuentra el archivo se para el programa)
    include_once (Incluido una vez, si ya se incluyo no se vuelve a hacer)
    require_once (Requerido una vez, si ya se requirio no se vuelve a hacer)
  */
  //Para que se respeten las declaraciones de tipo escalar
  declare(strict_types=1);

  //Llamamos al archivo que tiene la clase
  require_once 'persona.php';

  //Instanciamos la clase Persona()
  $persona1 = new Persona();

  //Setemos los datos
  $persona1->ObtenerEdad(1990);
  $persona1->setNombre("Cristian ");

  echo "Hola " . $persona1->getNombre();

  //Maneras de acceder a las variables estatica
  //echo $persona1::$miStatic . "<br>";
  //echo Persona::$miStatic . "<br>";

  //Cambiamos el valor de la variable estatica
  Persona::$miStatic=2018;
  echo Persona::$miStatic . "<br>";

  "<hr>";

  //Persona 2
  $persona2 = new Persona();
  $persona2->ObtenerEdad(1984);
  $persona2->setNombre("Daniel ");
  echo "Hola " . $persona2->getNombre();
  echo $persona2::$miStatic . "<br>";


?>
