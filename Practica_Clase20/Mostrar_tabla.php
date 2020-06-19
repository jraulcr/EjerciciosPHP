<?php

        echo ("<h1>Tabla de registro</h1>");
        echo "<table class='registros'>";
        echo "<thead class='cabecera_Datos'>";
        echo "<tr><th>Cliente	</th>";
        echo "<th>Artículo	</th>";
        echo "<th>Fecha pedido</th>";
        echo "<th>Fecha entrega</th>";
        echo "<th>País destino</th>";
        echo "<th>Ciudad destino</th>";
        echo "<th>Precio unidad</th>";
        echo "<th>Cantidad</th>";
        echo "<th>Descuento</th>";
        echo "</th></tr></thead><tbody class='listado_Datos'> ";

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $registro['CLIENTE'] . "</td>";
            echo "<td>" . $registro['ARTICULO'] . "</td>";
            echo "<td class='fecha'>" . $registro['FECHAPEDIDO'] . "</td>";
            echo "<td class='fecha'>" . $registro['FECHAENTREGA'] . "</td>";
            echo "<td>" . $registro['PAISDESTINO'] . "</td>";
            echo "<td>" . $registro['CIUDADDESTINO'] . "</td>";
            echo "<td class='numero'>" . $registro['PRECIOUNIDAD'] . "&euro;</td>";
            echo "<td class='numero'>" . $registro['CANTIDAD'] . "</td>";
            echo "<td class='numero'>" . $registro['DESCUENTO'] . "&#37;</td>";
        }
        echo "</tbody></table>";
        echo "<br> ";

?>
