<?php 

	$servidor="localhost";
	$usuario="root";
	$clave="";
	$bd="acacypac";

	//La conexion

	$con = new mysqli($servidor,$usuario,$clave,$bd);


	if ($con->connect_errno) {
		echo "Error en la conexion " . $con->connect_error;
		echo "<br>";
		die("No se puede continuar porque hay un error en la conexion");
	}



 ?>