<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pruebas mailing</title>
    </head>
    <body>

        <?php
        $nombre = $_POST["nombre"];
        $asunto = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];

        echo $nombre . " ha dicho: <br> " . $mensaje;

        if (mail("jraulcr@gmail.com", $asunto, $mensaje)) {
            echo " mail enviado";
        } else {
            echo " no se ha enviado";
        }
        ?>
    </body>
</html>





