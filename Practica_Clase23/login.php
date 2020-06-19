<!DOCTYPE html>
<!--
Juan Raúl Crespo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de PHP</title>
    </head>
    <body>
        <?php
        /* LEER VARIABLES DE $_POST */

        if (isset($_POST['entrar'])) {
            $usuario = $_POST['usuario'];
            $passw = $_POST['contra'];
        }
        if (($usuario == 'admin') and ($passw == 'admin')) {
            echo "<h1>Bienvenido</h1>";
        } else {
            echo "<p>No está autorizado</p>";
        }
        ?>
        <br> 

    </body>
</html>
