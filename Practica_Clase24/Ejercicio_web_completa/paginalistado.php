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
        <link rel="stylesheet" type="text/css" href="pagina.css"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
         <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
         <?php
             include("mapa.inc");
         ?>
        <!-- <script type="text/javascript" src="mimapa.js"></script>
        La anterior línea la sustituiríamos por un include de PHP
            si los mapas de Google Maps API 3 van a leer de MySQL -->        
    </head>
    <body onload="inicializar()">  <!-- Si utilizamos Google Maps hay que poner onload="inicializar() dentro de la etiqueta body"-->
        <div id="principal">
            <div id="banner">
                <?php
                include ("banner.inc");
                ?>
            </div>
            <div id="menu">
                <?php
                include("menu.inc");
                ?>
            </div>
            <div id="content">
                <div id="contenido">
                    <?php
                    include("provincia.inc");
                    ?>
                </div>
                <div id="mapa">
                    <?php
                    include("mapaderecha.php");
                    ?>
                </div>
            </div>
            <div id="pie">
                <?php
                include("pie.inc");
                ?>
            </div>            
        </div>        
    </body>
</html>
