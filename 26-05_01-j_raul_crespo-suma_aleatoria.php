<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sumatorio aleatorio</title>
    </head>
    <body>

        <?php
        $num = rand(1, 20);
        function sumatorio($num) {
            $resultado = 0;
            $cantidad = 1;

            while ($num >= $cantidad) {
                $resultado += $num;
                --$num;
            }
            return $resultado;
        }

        echo "Sumatorio de $num es: " . sumatorio($num) . "<br>";
        ?>
    </body>
</html>
