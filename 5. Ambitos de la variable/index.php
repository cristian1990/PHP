<?php
	$nombre="Juan";

	function cambiarDatos()
	{
		//Se comporta como otra variable totalmente distinta a la de "juan"
		//Esto se hace para asegurarse que no se sobreescriban las variables al incluir otros archivos.
		$nombre="maria";
	}

	cambiarDatos(); //Intento carbiar el dato llamando a la funcion

	echo $nombre;


	//La solucion, en caso de que quiera sobreescribir es cambiar el ambito a global
	echo "<br><br> -------------------------------------------<br><br>";

	$otroNombre="Mario";

	function cambiarNombre()
	{
		//Cambio a global la variable que contiene el nombre "mario". Siempre debe estar dentro de la funcion.
		global $otroNombre; 
		$otroNombre="Lucia";
	}

	cambiarNombre(); //Intento carbiar el dato llamando a la funcion

	echo "Cambiamos el nombre de mario a: " . $otroNombre;

?>