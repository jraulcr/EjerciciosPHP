<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
		//Paso 1
		//Asignamos un valor a la variable
		$variable = "Comer algas es realmente sano";
		echo "Respuesta 1: " . $variable."<br/>";
                
		//Paso 2
		//Determinar la posición de una palabra
		$posicion_cadena = strpos($variable, 'algas');
		echo "Respuesta 2: " .$posicion_cadena."<br/>";
                
		//Paso 3
		//Reemplazar texto en una variable
		$cadena_reemplazada = str_replace("realmente","muy",$variable);
		echo "Respuesta 3: ".$cadena_reemplazada."<br/>";
                
		//Paso 4
		//Determinar si existe o no una palabra en un string
		$existe_cadena = FALSE;
		$posicion_cadena = strpos($variable, 'anacardo');
		if($posicion_cadena !== FALSE){$existe_cadena = TRUE;}
		echo "Respuesta 4: ";
		echo $existe_cadena ? 'true' : 'false';
		echo "<br/>";
                
		//Paso 5
		//Inversa de un string
		$string_inversa = strrev($variable);
		echo "Respuesta 5: ".$string_inversa."<br/>";
                
		//Paso 6
		//Contar letra específica en un string
		$numero_letras = 0;
		$array_string = str_split($string_inversa);
		foreach($array_string as $split){
			if(strcmp($split,"e") == 0){
				$numero_letras += 1;
			}
		}
		echo "Respuesta 6: " . $numero_letras."<br/>";
	?>
 

    </body>
</html>
