<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de registros</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <?php
        $bus_cli = $_POST["cli"];
        $bus_art = $_POST["art"];
        $bus_fec_ped = $_POST["fec_ped"];
        $bus_fec_ent = $_POST["fec_ent"];
        //   $bus_demor = $_POST["demor"];
        $bus_pais_des = $_POST["pais_des"];
        $bus_ciud_des = $_POST["ciud_des"];
        $bus_precio_uni = $_POST["precio_uni"];
        $bus_cant = $_POST["cant"];
        $bus_desc = $_POST["desc"];
        //   $bus_subtot = $_POST["subtot"];

        try {

            $base = new PDO('mysql:host=localhost; dbname=bdexcel', 'root', '');

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            require ("./Altas_registro.php");
            require ("./Consulta_registros.php");

            $resultado->closeCursor();
        } catch (Exception $e) {

            die('Error: ' . $e->getMessage());
        } finally {

            $base = null;
        }
        ?>
        <a href="Formulario_Insertar_Registros.php">Volver</a>  
    </body>
</html>