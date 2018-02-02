<?php
  //Break = rompe el circuito.
  for ($i=0; $i <= 10; $i++) {
    if ($i == 7)
    {
      Break;
    }
    echo "Numero: $i <br>";
  }

  echo "<hr>";

  //Continue = salta un ciclo y pasa al otro.
  for ($i=0; $i <= 10; $i++) {
    if ($i == 6)
    {
      continue;
    }
    echo "Numero: $i <br>";
  }

  echo "<hr>";

  //Break y continue
  $i = 0;

  while ($i <= 20)
  {
    $i++;
    if ($i == 7 || $i == 8) {
      Continue;
    }
    if ($i == 15) {
      Break;
    }
    echo "El numero es $i <br>";    
  }
?>
