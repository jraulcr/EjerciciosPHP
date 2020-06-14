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
    </head>
    <body>

        <?php
        if (isset($_POST['a']) && isset($_POST['b'])) {

            $y = $_POST['a'];
            $z = $_POST['b'];

            if (isset($_POST['btsuma'])) {
                $c = $y + $z;
                echo " $y + $z es " . $c;
            }
            if (isset($_POST['btresta'])) {
                $c = $y - $z;
                echo " $y - $z es " . $c;
            }
            if (isset($_POST['btmult'])) {
                $c = $y * $z;
                echo " $y * $z es " . $c;
            }
            if (isset($_POST['btdiv'])) {
                $c = $y / $z;
                echo " $y / $z es " . $c;
            }
        }
        ?>
        <form name="calc" action="20-05_05calc2_juan_raul_crespo.php" method="post">
            A: <input type="text" value="<?php $y ?>" name="a" size="10">
            B: <input type="text" value="<?php $z ?>" name="b" size="10">
            <br>
            <input type="submit" value="suma" name="btsuma"> 
            <input type="submit" value="resta" name="btresta"> 
            <input type="submit" value="mult" name="btmult"> 
            <input type="submit" value="division" name="btdiv"> 
        </form>

    </body>
</html>
