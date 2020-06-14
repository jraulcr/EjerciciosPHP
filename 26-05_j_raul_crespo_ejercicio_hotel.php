<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Coste Hotel</title>
    </head>
    <body>
        <?php
        if (isset($_REQUEST["enviar"])) {
            $noches = $_REQUEST["noches"];
            $ciudad = $_REQUEST["ciudad"];
            $costeHotel = coste_hotel($noches);
            $costeAvion = coste_avion($ciudad);
            $costeCoche = coste_alquiler_coche($noches);
            $resultado = $costeHotel + $costeAvion + $costeCoche;
            echo $resultado;
        }

        function coste_hotel($n) {
            $coste_hotel = $n * 140;
            return $coste_hotel;
        }

        function coste_avion($ciudad) {
            $coste_viaje = 0;
            if ($ciudad == "oviedo") {
                $coste_viaje = 183;                
            } else if ($ciudad == "tokio") {
                $coste_viaje = 220;                
            } else if ($ciudad == "madrid") {
                $coste_viaje = 222;                
            } else{
                $coste_viaje = 475; 
            }
            return $coste_viaje;
        }
        
        function coste_alquiler_coche($num_noches){
            $coste = 0;
            $coste = $num_noches * 40;
            
            if($num_noches > 7){
                $coste = $coste - 50; 
            } else if($num_noches > 3){
                $coste = $coste - 20;                
            }             
            return $coste;
        }
        
        ?>

        <form action="#" method="post">
            <label for="noches">Numero de noches: <input type="text" name="noches"></label> 

            <label for="ciudad">Ciudad</label>    
            <select name="ciudad" id="ciudad">
                <option value="oviedo">Oviedo</option> 
                <option value="tokio">Tokio</option> 
                <option value="madrid">Madrid</option> 
                <option value="barcelona">Barcelona</option> 

            </select>


            <input type="submit" name="enviar">
        </form>
    </body>
</html>
