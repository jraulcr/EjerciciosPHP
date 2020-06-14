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
        $texto = 'Aprender a usar explode()';
        $array = explode(' ', $texto);
        foreach ($array as $palabra) {
            echo $palabra . '<br/>';
        }
        echo '<br/>';
        ?>
        <?php
        $to_parse = 'palabras,para,separar';
        $array = explode(',', $to_parse);
        foreach ($array as $palabra) {
            echo $palabra . '<br/>';
        }
        echo '<br/>';
        ?>
        <?php
        $texto = 'Aprender/a/usar/explode()/con/limite';
        //límite de tamaño del array positivo
        $array_limitado = explode('/', $texto, 4);
        foreach ($array_limitado as $palabra) {
            echo $palabra . '<br/>';
        }
        echo '<br/>';
        ?>
        
	<?php
	$texto = 'Aprender/a/usar/explode()/con/limite';
	$array_limitado = explode('/', $texto, -1);
	foreach ( $array_limitado as $palabra ) {
		echo $palabra . '<br/>';
	}
        echo '<br/>';
	?>
        
	<?php
	$cadena = "Este es el texto principal";
	$subcadena = substr ( $cadena, 0, 4);
	echo $subcadena; //imprime: Esta
        echo '<br/>';
	?>
	<?php
	$cadena = "Este es el texto principal";
	$subcadena = substr ( $cadena, 0, -4);
	echo $subcadena; //imprime: Esta es el texto princ
        echo '<br/>';
	?>
	<?php
	$cadena = "mensaje-ESP";
	$subcadena = substr ( $cadena, 0, -4);
	echo $subcadena; //imprime: mensaje
        echo '<br/>';
	?>
	<?php
	$cadena = "mi-imagen.jpg";
	$subcadena = substr ( $cadena, -3);
	echo $subcadena; //imprime: jpg
        echo '<br/>';
	?>
	<?php
	$texto = 'Lección con UTF-8';
	$cadena_cortada = mb_substr($texto, 8, null, "UTF-8");
	echo $cadena_cortada; //imprime “con UTF-8”
        echo '<br/>';
	?>

    </body>
</html>
