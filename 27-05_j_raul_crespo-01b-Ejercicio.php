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

        <form action="#" method="post">
            <div>                
                <select name="lista" id="lista">
                    <option value="1" name="1">1</option>
                    <option value="2" name="2">2</option>
                    <option value="3" name="3">3</option>
                    <option value="4" name="4">4</option>
                    <option value="5" name="5">5</option>
                    <option value="6" name="6">6</option>
                    <option value="7" name="7">7</option>
                    <option value="8" name="8">8</option>
                    <option value="9" name="9">9</option>
                    <option value="10" name="10">10</option>
                    <option value="11" name="11">11</option>
                    <option value="12" name="12">12</option>
                    <option value="13" name="13">13</option>
                    <option value="14" name="14">14</option>
                    <option value="15" name="15">15</option>
                    <option value="16" name="16">16</option>
                    <option value="17" name="17">17</option>
                    <option value="18" name="18">18</option>
                    <option value="19" name="19">19</option>
                    <option value="20" name="20">20</option>
                </select>                
                <button type="submit" name="calcular">calcular</button>
            </div>  <br>
        </form>

        <?php
        if (isset($_POST["calcular"])) {
            $numero = $_POST["lista"];

            function calculo_factorial($numero) {
                $factorial = 1;

                for ($i = $numero; $i >= 1; $i--) {
                    $factorial *= $i;
                    echo $i . '<br />';
                }

                return $factorial;
            }

            echo "<br>Factorial de $numero  = " . calculo_factorial($numero);
        }
        ?>
    </body>
</html>
