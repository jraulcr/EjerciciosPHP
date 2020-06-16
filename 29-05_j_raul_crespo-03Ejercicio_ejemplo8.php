<?php

//Creamos un array Indexado con tres elementos ('pizza', 'ensalada', 'hamburguesa')
$comida = array('pizza', 'ensalada', 'hamburguesa');

//Creamos un array Asociativo con tres elementos ('lechuga', 'tomate' y 'cebolla') que serán sus indices. 
//En cada uno de ellos especifica su valor 'con' o 'sin'.
$ensalada = array('lechuga' => 'con',
                    'tomate' => 'sin',
                    'cebollas' => 'con');

// Obtenemos el numero de elementos que contiene el array y lo asignarenos en una variable.
$largo = count($comida);

// la variable creada con el número de elementos del array lo condicionarenos dentro del "for". 
// Mientras el numero de elementos del array sea mayor que la variable inicializada "$i", será "true"; 
for ($i = 0; $i < $largo; $i++) {
    echo $comida[$i] . '<br />';
}

echo '<br /><br />Quiero mi ensalada:<br />';

// Recorré el array asociativo $ensalada usando "foreach"  
// devolviendo su contenido con su indice y su valor correspondiente :
foreach ($ensalada as $ingrediente => $incluir) {
    echo $incluir . ' ' . $ingrediente . '<br />';
}

echo '<br /><br />';

//Creamos un array Asociativo con seis elementos elementos usando "foreach"  
//para recorrer sus indices con sus valores.
$teams = array('Spurs' => 'San Antonio',
                'Cavaliers' => 'Cleaveland',
                'Heat' => 'Miami',
                'Bulls' => 'Chicago',
                'Suns' => 'Phoenix',
                'El Cele' => 'Villa San Carlos');

// Recorremos el array asociativo '$teams' usando un "foreach"
// devolviendo su contenido como indice y su valor correspondiente.
foreach ($teams as $team => $fantasyName) {
    echo '<br/> A ' . $fantasyName . ' se lo conoce como ' . $team;
}
?>
