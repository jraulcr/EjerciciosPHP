<?php

//Ejemplo de PHP array bidimensional (multidimensional)
$equipo_futbol = array
    (
    array("Rooney", "Chicharito", "Gigs"),
    array("Suarez"),
    array("Torres", "Terry", "Etoo")
);
foreach ($equipo_futbol as $equipo) {
    echo "<br>En este equipo juegan: ";
    foreach ($equipo as $jugador) {
        echo $jugador . " ";
    }
}
echo "<br>";
echo $equipo_futbol[0][1];
echo "<br>";
echo "<br>";
?>