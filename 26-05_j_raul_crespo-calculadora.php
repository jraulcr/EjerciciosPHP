<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        if (isset($_POST["calcular"])) {

            $operacion = $_POST["lista"];

            function resultado() {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                global $operacion;

                $res = 0;

                if ($operacion == "+") {
                    $res = $num1 + $num2;
                } else if ($operacion == "-") {
                    $res = $num1 - $num2;
                } else if ($operacion == "*") {
                    $res = $num1 * $num2;
                } else {
                    $res = $num1 / $num2;
                }
                return $res;
            }
        }
        ?>

        <p>El resultado de <?php echo $operacion ?> es: <strong><?php echo resultado()?></strong></p>

    </body>
</html>
