
<?php

$sql = "INSERT INTO B_PEDIDOS (CLIENTE, ARTICULO, FECHAPEDIDO, FECHAENTREGA, PAISDESTINO, CIUDADDESTINO, PRECIOUNIDAD, CANTIDAD, DESCUENTO)"
        . "VALUES (:cli, :art, :fec_ped, :fec_ent, :pai_des, :ciu_des, :pre_uni, :cant, :desc) ";

$resultado = $base->prepare($sql);

$resultado->execute(array(
    ":cli" => $bus_cli,
    ":art" => $bus_art,
    ":fec_ped" => $bus_fec_ped,
    ":fec_ent" => $bus_fec_ent,
    ":pai_des" => $bus_pais_des,
    ":ciu_des" => $bus_ciud_des,
    ":pre_uni" => $bus_precio_uni,
    ":cant" => $bus_cant,
    ":desc" => $bus_desc
));

//Verificamos si los registros se han registrado correctamente
if ($resultado == false) {
    echo "<h2 class='error'>Error en la consulta</h2>";
} else {
    echo "<h2 class='guardado'>Registro guardado correctamente</h2>";

    $sql = "SELECT CLIENTE, ARTICULO, FECHAPEDIDO, FECHAENTREGA, PAISDESTINO, CIUDADDESTINO, PRECIOUNIDAD, CANTIDAD, DESCUENTO FROM B_PEDIDOS ORDER BY CLIENTE ASC";

    $resultado = $base->prepare($sql);

    $resultado->execute();

    //Verificamos si los registros se han registrado correctamente
    if ($resultado == false) {
        echo ("Error en la consulta");
    } else {
        require './Mostrar_tabla.php';
    }
}
?>
