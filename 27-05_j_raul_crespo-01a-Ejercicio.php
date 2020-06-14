<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero = 5;

        function calculo_factorial($numero) {
            $factorial = 1;

            for ($i = $numero; $i >= 1; $i--) {
                $factorial *= $i;
                echo $i . '<br />';
            }

            return $factorial;
        }

        echo "<br>Factorial de $numero  = " . calculo_factorial($numero);
        ?>
    </body>
</html>
