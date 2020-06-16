<?php
        //Codigo debug
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
        //Fin Codigo debug
        
	include("28-05_j_raul_crespo-03b-Ejercicio-mis_clases.php");
	$mis_clases = new MisClases();
	$mis_clases->setCantidad(25);
	echo $mis_clases->dame_string();
	echo "<br/>";
	if($mis_clases->es_mayor_edad()){
		echo "Es mayor de edad";
	}else{
		echo "No lo es!!!";
	}
?>