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

        // function03.php - Modificando un parámetro
        function incrementa(&$variable) {
            $variable++;
        }

        $a = 5;

        echo "a vale " . $a . "<br>";
        incrementa($a);
        echo "Ahora a vale " . $a . "<br>"; // Ahora $a vale 6
        ?>
    </body>
</html>
