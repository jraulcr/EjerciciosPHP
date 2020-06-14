<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <?php
        $ciudad [] ="San Cristobal";
        $ciudad [] ="Cucuta";
        $ciudad [] ="Maracaibo";
        $ciudad [] ="Caracas";
        $n = count($ciudad);
        echo "Numero de elementos: " . $n;
        
        for ($i = 0; $i < $n; $i++) {
            echo "<br> Ciudad $i <h1>" . $ciudad [$i] . "</h1>";
        }
        ?>
    </body>
</html>
