
<?php
  //Constante = el valor almacenado no puede cambiar
  //debe ir en MAYUSCULA no debe llevar $
  //Nombre de la constante "AUTOR" valor "Juan"
  define("AUTOR","Juan Carlos");
  echo "El autor es: " . AUTOR;

  //true = indica que se puede ingresar en mayuscula o minuscula
  define("CANTANTE","Miguel Angel", true);
  echo "<br>El autor es: " . cantante;

  //Constantes predefinidas PHP
  /*
  __LINE__	El número de línea actual en el fichero.
  __FILE__	Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.
  __DIR__	Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra final a no ser que esté en el directorio root.
  __FUNCTION__	Nombre de la función.
  __CLASS__	Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
  __TRAIT__	El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).
  __METHOD__	Nombre del método de la clase.
  __NAMESPACE__	Nombre del espacio de nombres actual.
  ClassName::class	El nombre de clase completamente cualificado. Véase también ::class.
  */

  echo "<br>La linea de esta instruccion es: " . __LINE__;
  echo "<br>Estamos trabajando con este fichero: " . __FILE__;
 ?>
