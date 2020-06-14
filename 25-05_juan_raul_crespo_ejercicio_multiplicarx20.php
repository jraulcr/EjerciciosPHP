<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba formulario</title>
    </head>
    <body>
        <form action="#" method="post">            
            ELIGE UN NUMERO: <input type="text" name="numero">
            <input type="submit" name="enviar" value="Enviar">
            <input type="submit" name="limpiar" value="Limpiar">            
        </form>

        <?php
        if (isset($_REQUEST["enviar"])) {
            $numero = $_REQUEST['numero'];
            if ($numero != "") {
                $i = 0;
                do {
                    ++$i;
                    $p = $numero * $i;
                    echo $numero . ' x ' . $i . ' = ' . $p;
                    echo "<br>";
                } while ($i < 20);
            }
        }
        if (isset($_REQUEST['limpiar'])) {
            echo "";
        }
        ?>
    </body>
</html>
