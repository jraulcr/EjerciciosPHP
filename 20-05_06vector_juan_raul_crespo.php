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
        if (isset($_POST['vec'])) {

            $vector = $_POST['vec'];
            $n = count($vector);
            $suma = 0;

            echo "el vector tiene $n elementos <br>";

            for ($i = 0; $i < $n; $i++) {
                echo "$i = $vector[$i] <br>";
                $suma = $suma + $vector[$i];
            }
            echo "la suma es $suma <br>";
        }
        ?>

        <form name="calc" action="20-05_06vector_juan_raul_crespo.php" method="post">
            <?php
            $n = 8;
            for ($i = 0; $i <= $n; $i++) {
                echo $i;
                echo "<input type='text' name='vec[]' size='10' ><br>";
            }
            ?>
            <input type="submit" value="enviar">                
        </form>

    </body>
</html>
