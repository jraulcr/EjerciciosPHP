<!DOCTYPE html>
<!--
 R
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php       
            if (isset($_POST['boton'])){ // Se ha pulsado el botón???
              $letras='TRWAGMYFPDXBNJZSQVHLCKE';
              $dni=$_POST['dni'];
              $indice=intval($dni)%23;
              $letra=$letras[$indice];
              echo "<p>La letra del dni $dni es $letra</p>";
            }
            else{   // Primera carga
             include ("dni.inc");    
            }  
        ?>
    </body>
</html>
