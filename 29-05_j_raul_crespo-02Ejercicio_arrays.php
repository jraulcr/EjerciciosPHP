<?php

//Paso1
$variable = "a-a-r-e-f-a";
echo "Respuesta 1: " . $variable . "<br>";

//Paso2
//Reemplazamos un carácter por una cadena
$variable = str_replace("a", "tortuga", $variable);
echo "Respuesta 2: " . $variable . "<br>";

//Paso3
//Separa una cadena en un array
$variable = "a-a-r-e-f-a";
$array = preg_split('/-/', $variable);
print_r($array);
echo "<br>";

//Paso4
//Ordena un array de manera descendiente
rsort($array);
echo "Respuesta 4: <br>";
print_r($array);
echo "<br>";

//Paso5
//Separamos el array sólo los valores indicados
$nueva_array = array();
foreach ($array as &$contenido) {
    if (!strpos($contenido, 'a')) {
        array_push($nueva_array, $contenido);
    }
}
echo "Respuesta 5:<br>";
print_r($nueva_array);
echo "<br>";

//Paso6
//Contar el tamaño de un array
$cantidad = count($nueva_array);
echo "Respuesta 6: " . $cantidad . "<br>";
?>