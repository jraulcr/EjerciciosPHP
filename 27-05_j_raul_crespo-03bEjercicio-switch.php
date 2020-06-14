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
                    <option value="" name="">Selecciona link</option>
                    <option value="contacto" name="contacto">Contacto</option>
                    <option value="inicio" name="inicio">Inicio</option>
                    <option value="blog" name="blog">Blog</option>
                    <option value="empleados" name="empleados">Empleados</option>
                    <option value="quienes-somos" name="quienes-somos">Quienes somos</option>
                    <option value="sitemap" name="sitemap">Sitemap</option>
                </select>                
            </div>  
            <br>
            <button type="submit" name="mostrar">Mostrar</button>
        </form>

       <?php        
        if(isset($_POST["mostrar"])){
            $link = controlar(); 
            echo "<br>";
            echo $link;
        }
        
        function controlar() {          
            $fichero = "";
            if (isset($_POST["lista"])) {
                $controlador = $_POST["lista"];
                switch ($controlador) {
                    case 'contacto':
                        $fichero = 'contacto.php';
                        break;
                    case 'inicio':
                        $fichero = 'inicio.php';
                        break;
                    case 'blog':
                        $fichero = 'blog.php';
                        break;
                    case 'empleados':
                        $fichero = 'empleados.php';
                        break;
                    case 'quienes-somos':
                        $fichero = 'quienes_somos.php';
                        break;
                    case 'sitemap':
                        $fichero = 'sitemap.php';
                        break;
                    default:
                        $fichero = 'error404.php';
                }
                return $fichero;
            }
        }
        ?> 
    </body>
</html>
