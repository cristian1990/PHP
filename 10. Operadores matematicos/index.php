<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Operadores Matematicos</title>
</head>
<body>
	<!--sirve para representar en HTML un espacio en blanco-->
	<p>&nbsp</p>
	<form name="form1" method="post" action="operacion.php">
		<p>
			<label for="num1"></label>
			<input type="text" name="num1" id="num1">
			<label for="num2"></label>
			<input type="text" name="num2" id="num2">
			<label for="operacion"></label>
			<select name="operacion" id="operacion">
				<option>Suma</option>
				<option>Resta</option>
				<option>Multiplicacion</option>
				<option>Division</option>
				<option>Modulo</option>
			</select>
		</p>
		<p>
			<input type="submit" name="boton" id="boton" value="Enviar" onclick="prueba">
		</p>
	</form>
	<p>&nbsp</p>
</body>
</html>
