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
                    <option value="contacto" name="contacto">Contacto</option>
                    <option value="inicio" name="inicio">Inicio</option>
                    <option value="blog" name="blog">Contacto</option>
                    <option value="empleados" name="empleados">Empleados</option>
                    <option value="quienes-somos" name="quienes-somos">Quienes somos</option>
                    <option value="sitemap" name="sitemap">Sitemap</option>
                </select>                
            </div>  
            <br>
            <button type="submit" name="mostrar">Mostrar</button>
        </form>

        <?php
        if (isset($_POST["mostrar"])) {
            $controlador = $_POST["lista"];
            switch ($controlador) {
                case 'contacto':
                    echo 'Controlador de página de contacto';
                    break;
                case 'inicio':
                    echo 'Controlador de página de Inicio';
                    break;
                case 'blog':
                    echo 'Controlador de página de blog';
                    break;
                case 'empleados':
                    echo 'Controlador de página de empleados';
                    break;
                case 'quienes-somos':
                    echo 'Controlador de página de Quienes Somos';
                    break;
                case 'sitemap':
                    echo 'Controlador de página de Mapa del sitio';
                    break;
            }
        }
        ?>
    </body>
</html>
