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

        class Menu {

            private $isHorizontal = false;

            public function __construct() {                
            }

            function getIsHorizontal() {
                return $this->isHorizontal;
            }
        }

        $menu = new Menu;
        if ($menu->getIsHorizontal()) {
            echo '<h1>Titulo</h1><br/>
                <a href="#">a</a>
                <a href="#">b</a>
                <a href="#">c</a>';
        } else {
            echo '<h1>Titulo</h1><br/>
                <a href="#">a</a><br/>
                <a href="#">b</a><br/>
                <a href="#">c</a><br/>';
        }
        ?>

    </body>
</html>
