<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>

        <form name="tabla" action="#" method="post">
            <div><label for="num">Numero a multiplicar: <input type="number" id="num" name="num"></label></div>
            <div><button type="submit" name="calcular">calcular</button></div>
            <br>
        </form>  

        <?php
        if (isset($_POST["calcular"])) {

            $numero = $_POST["num"];

            for ($i = 0; $i <= 10; $i++) {
                echo "$numero x $i = " . $numero * $i . "<br>";
            }
        }
        ?>
    </body>
</html>
