<?php

$sql = "SELECT CLIENTE, ARTICULO, FECHAPEDIDO, FECHAENTREGA, PAISDESTINO, CIUDADDESTINO, PRECIOUNIDAD, CANTIDAD, DESCUENTO FROM B_PEDIDOS "
        . "WHERE CLIENTE = :cli "
        . "OR ARTICULO = :art "
        . "OR FECHAPEDIDO = :fec_ped "
        . "OR FECHAENTREGA = :fec_ent "
        . "OR PAISDESTINO = :pai_des "
        . "OR CIUDADDESTINO = :ciu_des "
        . "ORDER BY CLIENTE ASC";

$resultado = $base->prepare($sql);

//$resultado->execute(array(":cli" => $bus_cli, ":art" => $bus_art));

$resultado->execute(array(
    ":cli" => $bus_cli,
    ":art" => $bus_art,
    ":fec_ped" => $bus_fec_ped,
    ":fec_ent" => $bus_fec_ent,
    ":pai_des" => $bus_pais_des,
    ":ciu_des" => $bus_ciud_des
));


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
