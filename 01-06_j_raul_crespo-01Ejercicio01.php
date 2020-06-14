<?php
//Ejemplo de PHP array con índice numérico (indexado)
$nombre = "Aner";
$array = array(1, 2, 3, "casa", $nombre);
//saco el numero de elementos
$longitud = count($array);
//Recorro todos los elementos
for ($i = 0; $i < $longitud; $i++) {
    //saco el valor de cada elemento
    echo $array[$i];
    echo "<br>";
}
echo "<br>";
echo $array[0];
echo "<br><br>";
echo $array[4];
?>