<?php
//Creamos un array Indexado con tres elementos ('pizza', 'ensalada', 'hamburguesa')
$comida = array('pizza', 'ensalada', 'hamburguesa');

//Ordenamos los elementos por orden alfabetico
sort($comida);

//Recorremos los elementos mediante un bucle "Foreach" y obtendremos el listado ordenado anteriormente. 
foreach ($comida as $value) {
    echo $value . '<br />';
}

echo '<br /><br />Quiero mi ensalada:<br />';

//Creamos un array Asociativo con tres elementos ('lechuga', 'tomate' y 'cebolla') que serán sus indices 
//y en cada uno de ellos especifica su valor 'con' o 'sin'.
$ensalada = array('lechuga' => 'con',
                    'tomate' => 'sin',
                    'cebollas' => 'con');

//Ordenamos el indice de elementos por orden alfabetico
ksort($ensalada);

// Recorre el array mediante el bucle "foreach" devolviendo su contenido ordenado anteriormente con su indice 
// y su valor correspondiente cada vez que el bucle hace su recorrido:
foreach ($ensalada as $ingrediente => $incluir) {
    echo $incluir . ' ' . $ingrediente . '<br />';
}

echo '<br /><br />';
?>
