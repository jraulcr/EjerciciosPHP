<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Menu {

            public $arrayListado = array();            

            public function menuVertical($arrayLista) {
                foreach ($arrayLista as $kTitulo => $vEnlace) {
                    echo '<a href="' . $vEnlace . '">' . $kTitulo . '</a><br/>';
                }
            }

            public function menuHorizontal($arrayLista) {
                foreach ($arrayLista as $kTitulo => $vEnlace) {
                    echo '<a href="' . $vEnlace . '">' . $kTitulo . '</a> ';
                }
            }
        }

        //Llamada a la clase
        $menu = new Menu();
        static $isHorizontal = true;
        
        $arrayListado = array(
            "Inicio" => "index.php", 
            "Galería" => "galeria.php", 
            "Nosotros" => "nosotros.php");

        //Opciones de menu H o V
        if ($isHorizontal) {            
            $menu->menuHorizontal($arrayListado);            
        } else {            
            $menu->menuVertical($arrayListado);            
        }
        
        ?>
    </body>
</html>
