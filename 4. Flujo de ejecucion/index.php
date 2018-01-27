<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Flujo de ejecucion</title>
</head>
<body>
	<?php
		echo "Mensaje uno <br>";

		include ("codigoPHP.php"); //Si hay error el resto del programa se ejecuta.
	  //require ("codigoPHP.php");  //Si hay error  el resto del programa NO se ejecuta.

		echo "<br> Mensaje dos";

		echo dameDatos();
	?>
</body>
</html>