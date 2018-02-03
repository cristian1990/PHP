<?php
  /*
    random_bytes(int longitud);  Genera una cadena para encriptar
    random_int(int minimo, int maximo);
  */
  echo bin2hex(random_bytes(10));
  echo "<br>" . random_int(10, 150);

?>
