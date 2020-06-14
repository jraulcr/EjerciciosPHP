<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucle</title>
    </head>
    <body>
        <?php
        echo "<h1> Bienvenidos a mi página web </h1>";
        $i = 0;
        echo "<table align='center' border='1'>";
        for ($i = 0; $i < 10; $i++) {

            echo "<tr><td>" . "Mi correo es oliver@yahoo.com </td></tr>";
        }
        echo "</table>";
        ?>

    </body>
</html>
