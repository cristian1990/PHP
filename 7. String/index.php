<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<title>String</title>
</head>
<body>
	<?php
		$nombre = "Juan";
		//Incluir comillas dentro de otras
	  //echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
		echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

		/*strcmp = Compara valores de tipo string (NO ignora si estan en mayuscula o minuscula)
				   devuelve 0 si coinciden y 1 si no coinciden*/
		$variableUno = "Casa";
		$variableDos = "CASA";
		$resultado = strcmp($variableUno, $variableDos);

		echo "El resultado es: " . $resultado;


		/*strcasecmp = Compara valores de tipo string (ignora si estan en mayuscula o minuscula)
				       devuelve 0 si coinciden y 1 si no coinciden*/
		$variableTres = "Casa";
		$variableCuatro = "CASA";
		$resultadoDos = strcasecmp($variableTres, $variableCuatro);

		echo "<br>El resultado es: " . $resultadoDos;
	?>
</body>
</html>