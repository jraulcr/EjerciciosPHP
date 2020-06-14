<?php

            $sql = "SELECT CLIENTE, ARTICULO, FECHAPEDIDO, FECHAENTREGA, PAISDESTINO, CIUDADDESTINO, PRECIOUNIDAD, CANTIDAD, DESCUENTO FROM B_PEDIDOS ORDER BY CLIENTE ASC";

            $resultado = $base->prepare($sql);

            $resultado->execute();

            //Verificamos si los registros se han registrado correctamente
            if ($resultado == false) {
                echo ("Error en la consulta");
            } else {
                echo ("<h1>Tabla de registro</h1>");
                echo "<table class='registros'>";
                echo "<thead class='cabecera_Datos'><tr><th>Cliente	</th>";
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
                  //  echo "<td class='fecha'>" . $registro['DEMORA'] . "</td>";
                    echo "<td>" . $registro['PAISDESTINO'] . "</td>";
                    echo "<td>" . $registro['CIUDADDESTINO'] . "</td>";
                    echo "<td class='numero'>" . $registro['PRECIOUNIDAD'] . "&euro;</td>";
                    echo "<td class='numero'>" . $registro['CANTIDAD'] . "</td>";
                    echo "<td class='numero'>" . $registro['DESCUENTO'] . "&#37;</td>";
                //    echo "<td class='numero'>" . $registro['SUBTOTAL'] . "&euro;</td></tr>";
                }
                echo "</tbody></table>";
                echo "<br> ";
            }
?>
