<?php
	echo "VARIABLE COMUN<br>";
	function incrementarVariable()
	{
		$contador = 0;
		$contador++;

		echo $contador . "<br>";
	} //cuando la termina la funcion la variable se destruye

	//por ese motivo siempre imprime 1
	incrementarVariable();
	incrementarVariable();
	incrementarVariable();
	incrementarVariable();

	//La solucion para incrementar es crear una variable estatica
	echo "<br>---------------------------------<br><br>";
	echo "VARIABLE ESTATICA<br>";

	function incrementarNumero()
	{
		static $cont = 0; //Declaramos a la variable estatica, para que pueda incrementarse
		$cont++;

		echo $cont . "<br>";
	} //cuando la termina la funcion la variable se destruye

	//por ese motivo siempre imprime 1
	incrementarNumero();
	incrementarNumero();
	incrementarNumero();
	incrementarNumero();
?>