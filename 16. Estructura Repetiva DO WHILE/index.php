<?php
  //El codigo se ejecuta al menos una vez

  $num = 0;
  do {
    echo ("<br>" . $num);
    $num++;
  } while ($num <= 20);

  echo "<hr>";

  $vector = array("jose" , "pedro", "juan", "cristian", "laura", "tomas", "maria", "miguel");

  $nombre = "";
  $i = 0;

  do {
    $nombre = $vector[$i];
    echo "<br>" . $nombre;
    $i++;
  } while ($nombre != "laura");
?>
