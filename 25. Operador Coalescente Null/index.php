<?php
  //Evalua si una variable se encuentra vacia o no
  //Asigna el primer valor que no se encuentre vacio, nueva forma PHP7
  $_GET["nombre"] = "Cristian";
  $_GET["apellido"] = "Silva";
  $_GET["pais"] = "Argetina";
  $variable = $_GET["nombre"] ?? $_GET["apellido"] ?? $_GET["Argentina"] ?? "No se recibio el nombre";
  echo $variable;
?>
