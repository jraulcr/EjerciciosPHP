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
            label {
                width: 150px;
                display: inline-block;
            }
        </style>
        
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action="pagina2.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre"><br>
            
            <label for="asunto">Asunto</label>
            <input type="text" name="asunto" id="asunto"><br>
            
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>
            
            <input type="submit">             
        </form>
    </body>
</html>
