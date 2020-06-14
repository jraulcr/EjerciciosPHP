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
        //SOLUCION 1: CON WHILE
        $paginas = 10;
        
        $i = 1;
        while ($i <= $paginas) {
            echo '<a href="#" >' . $i . '</a><br> ';
            $i++;
        }

        echo '<br>';

        //SOLUCION 2: CON FOR
        for ($i = 1; $i <= $paginas; $i++) {
            echo '<a href="#" >' . $i . '</a><br> ';
        }
        ?>  

        <?php
        //SOLUCION 3: CERRANDO Y ABRIENDO PHP
        //Aclaración: esta solución es válida con cualquier bucle php
            
            echo '<br>';
            for ($i = 1; $i <= $paginas; $i++) {
        ?>
            <a href="#" > <?php echo $i ?> </a>
            <br>
        <?php
        }
        ?>
    </body>
</html>
