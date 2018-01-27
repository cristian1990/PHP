<?php
	//Declaramos una variable
	$valorNulo = null;
	$apellido = "silva";
	$_nombre = "Cristian";
	$edad = 28;
	$sueldo = 14.988;
	$booleana = false;
	$arreglos = array("jose", "pedro", "carlos" );  //Array con indice
	$arreglosAsociativo = array("Nombre" => "Luis", "sexo" => "masculino"); //Array asociativo

	//Imprimimos una variable
	echo "Su nombre es: ";
	echo $_nombre;

	echo "<br/>Su apellido es: ";
	echo $apellido;

	echo "<br/>Su edad es: ";
	echo $edad;

	echo "<br/>Su sueldo es: ";
	echo $sueldo;

	echo "<br/>Sexo: ";
	if ($booleana == false) {
		echo "Es hombre<br/>";
	}

	//Concatenacion
	echo "<br/>Concatenando<br/>";
	echo "El nombre es: " . $_nombre . " Su apellido es: " . $apellido;

	//echo permite imprimir en pantalla varias variables a la vez
	echo "<br/>" . $_nombre,$edad;

	//Imprimimos informacion de nuestra variable
	echo "<br/><br/>Informacion de la variable";
	var_dump($apellido);
	var_dump($edad);
	var_dump($sueldo);
	var_dump($booleana);
?>