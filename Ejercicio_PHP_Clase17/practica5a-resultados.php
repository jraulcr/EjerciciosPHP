<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Conversor de euros a pesetas. Resultados del formulario</title>
        <style>
            p.error{
                color:red;
                font-size: 1.4em;
                font-weight: bold;
            }
            p.correcto{
                color:blue;
                font-size: 1.4em;
                font-weight: bold;
            }
        </style>
    </head>

    <body>

        <h1>Conversor de euros a pesetas</h1>

        <?php
        $enviar = $_REQUEST['enviar'];
        if (isset($enviar)) {
            define("EUROPTS", 166.386);
            $euros = $_REQUEST['euros'];

            if (empty($euros) || !is_numeric($euros)) {
                print "<p class='error'>Debe introducir una cantidad</p>\n";
            } else {
                 $pesetas = $euros * EUROPTS;
                
                print "<p class='correcto'>$euros euro(s) equivale(n) a " . (int)$pesetas . " pesetas</p>\n";
            }
        }
        ?>

        <a href="practica5a.php">Volver</a>
    </body>
</html>
