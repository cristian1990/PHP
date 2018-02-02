<?php
  /*
  TIPOS DE ARRAY
    Numericos
    Asociativos (indice => valor)
    Multidimensionales
  */

  //Los array pueden tener distintos tipos de datos
  $multi = array("array uno" => array(array("<br>" . 5,4,8), array("<br>" . 9,7), "array dos" => array("<br>" . 8,9," carlos")));

  foreach ($multi as $nivelUno)
  {
    foreach($nivelUno as $nivelDos)
    {
      foreach($nivelDos as $nivelTres)
      {
        echo $nivelTres;
      }
    }
  }
?>
