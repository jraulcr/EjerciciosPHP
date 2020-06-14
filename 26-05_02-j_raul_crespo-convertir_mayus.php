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
        <form action="#" method="post">            
            ESCRIBIR: <input type="text" name="texto">
            <input type="submit" name="enviar" value="Enviar">
            <input type="submit" name="limpiar" value="Limpiar">            
        </form>
        <?php
        if (isset($_POST["enviar"])) {
            $texto = $_POST["texto"];

            function escribeTitulo($texto) {
                echo "<p><strong>" . ucwords(strtolower($texto)) . "</strong></p>";
            }

            escribeTitulo($texto);
        }
        ?>
    </body>
</html>
