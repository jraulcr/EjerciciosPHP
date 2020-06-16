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
        /*
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

         */

        //Si los campos están vacios, serán NULL
        $bus_cli = isset($_POST["cli"]) ? $_POST["cli"] : null;
        $bus_art = isset($_POST["art"]) ? $_POST["art"] : null;
        $bus_fec_ped = isset($_POST["fec_ped"]) ? $_POST["fec_ped"] : null;
        $bus_fec_ent = isset($_POST["fec_ent"]) ? $_POST["fec_ent"] : null;
        $bus_pais_des = isset($_POST["pais_des"]) ? $_POST["pais_des"] : null;
        $bus_ciud_des = isset($_POST["ciud_des"]) ? $_POST["ciud_des"] : null;
        $bus_precio_uni = isset($_POST["precio_uni"]) ? $_POST["precio_uni"] : null;
        $bus_cant = isset($_POST["cant"]) ? $_POST["cant"] : null;
        $bus_desc = isset($_POST["desc"]) ? $_POST["desc"] : null;

        //Si los campos no están a null procesamos
        if (!$bus_cli == null ||
                !$bus_art == null ||
                !$bus_fec_ped == null ||
                !$bus_fec_ent == null ||
                !$bus_pais_des == null ||
                !$bus_ciud_des == null ||
                !$bus_precio_uni == null ||
                !$bus_cant == null ||
                !$bus_desc == null) {

            //Control de botones
            if (isset($_POST["guardar"])) {
                
                $guardar = $_POST["guardar"];
                
            } elseif ($_POST["buscar"]) {
                
                $buscar = $_POST["buscar"];
                
            }

            try {

                $base = new PDO('mysql:host=localhost; dbname=bdexcel', 'root', '');

                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $base->exec("SET CHARACTER SET utf8");

                if (isset($guardar)) {

                    require ("./Altas_registro.php");
                    
                } else if (isset($buscar)) {

                    require ("./Consulta_registros.php");
                }

                $resultado->closeCursor();
                
            } catch (Exception $e) {

                die('Error: ' . $e->getMessage());
                
            } finally {

                $base = null;
            }
            
        } else {

            header("location:Formulario_Insertar_Registros.php");
            
        }
        ?>
        <a href="Formulario_Insertar_Registros.php">Volver</a>  
    </body>
</html>