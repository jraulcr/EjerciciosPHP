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

        <style>
            table{
                margin:auto;
                width: 450px;
                border:2px dotted red;
            }

        </style>


    </head>
    <body>
        <form action="cambiodatospersonales.php" enctype="multipart/form-data" method="post">
            <label for="imagen">Imagen:</label>
            <input id="imagen" name="imagen" size="30" type="file" />
            <input type="submit" value="Cambiar datos" />     

            <?php
            //****************** CONSULTA *************
            require ("datosConexionBBDD.php");

            $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

            if (mysqli_connect_errno()) {
                echo "Fallo al conectar la BB.DD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

            mysqli_set_charset($conexion, "utf8");

            $consulta = "SELECT RUTAIMAGEN FROM USUARIOSIMG";
            $result = mysqli_query($conexion, $consulta);

            while ($row = mysqli_fetch_array($result)) {
                $ruta_img = $row["RUTAIMAGEN"];
            }
            ?>   

        </form>  

        <?php if (isset($ruta_img)): ?>       
            <br/>
            <img src="/intranet/uploads/<?php echo $ruta_img ?>" alt="Imagen del primer articulo" width="25%">
        <?php endif; ?>

    </body>
</html>

