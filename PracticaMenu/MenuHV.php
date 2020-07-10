<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Menu {

            private $enlace = array();
            private $titulo = array();

            public function cargarOpciones($enlace, $titulo) {
                $this->enlace[] = $enlace;
                $this->titulo[] = $titulo;
            }

            public function menuHorizontal() {                
                for ($i = 0; $i < count($this->enlace); $i++) {
                    echo '<a href="' . $this->enlace[$i] . '">' . $this->titulo[$i] . '</a>';
                    echo "   ";
                }
            }
            
            public function menuVertical() {
                for ($i = 0; $i < count($this->enlace); $i++) {
                    echo '<a href="' . $this->enlace[$i] . '">' . $this->titulo[$i] . '</a>';
                    echo "<br/> ";
                }
            }
        }

        $menu1 = new Menu();

        $menu1->cargarOpciones('www.google.es', 'Google');
        $menu1->cargarOpciones('www.yahoo.es', 'Yahoo');
        $menu1->cargarOpciones('www.msn.es', 'MSN');

        $menu1->menuHorizontal();
        echo '<br/><br/>';
        $menu1->menuVertical();
        
        ?>
    </body>
</html>
