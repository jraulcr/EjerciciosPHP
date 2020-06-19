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
        
        $numeroDeIteraciones = $_POST["numero"];

            $i = 1;  //Inicializo el contador
            while ($i <= $numeroDeIteraciones) {
                echo "Ésta es la línea número " . $i . "<br/>";
                $i++;
            }
            ?>
        <br> 
    </body>
</html>
