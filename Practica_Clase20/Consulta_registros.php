<?php

$sql = "SELECT CLIENTE, ARTICULO, FECHAPEDIDO, FECHAENTREGA, PAISDESTINO, CIUDADDESTINO, PRECIOUNIDAD, CANTIDAD, DESCUENTO FROM B_PEDIDOS "
        . "WHERE CLIENTE = :CLI AND ARTICULO = :ART ORDER BY CLIENTE ASC";

$resultado = $base->prepare($sql);

$resultado->execute(array(":CLI" => $bus_cli, ":ART" => $bus_art));

$numero_registro = $resultado->rowCount();

//echo $numero_registro;
//Verificamos si los registros se han registrado correctamente
if ($numero_registro == 0) {

    echo ("<h2>No se encuentra en la tabla</h2>");
    
} else {

    echo ("<h2>Dato encontrado</h2>");
    require './Mostrar_tabla.php';
}
?>
