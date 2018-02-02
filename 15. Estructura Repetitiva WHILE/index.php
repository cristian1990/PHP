<?php
  $num = 0;

  while ($num <= 15) {
    $num++;
    echo ("<br>" . $num);
  }

  echo "<hr>";

  $vector = array("jose" , "pedro", "juan", "cristian", "laura", "tomas", "maria", "miguel");

  $nombre = "";
  $i = 0;
  while ($nombre != "maria") {
    $nombre = $vector[$i];
    echo "<br>" . $nombre;
    $i++;
  }

  echo "<hr>";

  $vector = array("lorena" , "luis", "angel", "damian", "rebeca", "dario", "hernan", "mateo");

  $nombre = "";
  $i = 0;
  while (true) //Se ejecuta siempre
  {
    $nombre = $vector[$i];
    if ($nombre == "rebeca") {
      break;
    }
    echo "<br>" . $nombre;
    $i++;
  }

?>
