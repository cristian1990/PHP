<?php
	/*
	variables locales
	variables globales
	variables estaticas
	parametros funcionales
	*/

	//VARIABLES GLOBALES
	$variableGlobal = "Soy una variable global";

	//Declaracion de funciones
	function varGlobal()
	{
		global $variableGlobal;
		echo "<br>---Dentro de la funcion---<br>";
		echo $variableGlobal;
	}
	echo "---Fuera de la funcion---<br>";
	echo $variableGlobal;
	echo varGlobal();


	//VARIABLES LOCALES	
	function varLocal()
	{
		$varibleLocal = "Soy una variable local";
	}
	echo "<br><br>Error porque la variables se declaro en la funcion";
	echo $varibleLocal;


	//VARIABLES ESTATICAS
	function varEstatica()
	{
		echo "<br>--Variable Comun--";
		static $variableEstatica = 1;
		echo $variableEstatica++;
		echo "<br>--Variable Estatica--";
		$variableComun = 0;
		echo $variableComun++;
	}

	echo "<br>" . varEstatica(); 
	echo "<br>" . varEstatica(); 
	echo "<br>" . varEstatica(); 
?>