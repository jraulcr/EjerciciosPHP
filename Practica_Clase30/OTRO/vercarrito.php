<?php
session_start();
//Iniciamos o retomamos la
//sesión
if (isset($_SESSION['carro']))
    $carro = $_SESSION['carro'];
else
    $carro = false;
//La asignamos a la variable
//$carro si existe o ponemos a false $carro
//en caso contrario
?>
<html>
    <head>
        <title>PRODUCTOS AGREGADOS AL CARRITO</title>
        <meta charset="utf-8">

        <style type="text/css">
            <!--
            .tit {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 12px;
                color: #FFFFFF;
            }
            .prod {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 16px;
                color: #333333;
            }
            h1 {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 20px;
                color: #990000;
            }
            .total{
                color:blue;
                font-weight: bold;
            }
            .submit {
                width: 20px;
                height: 20px;
                border: 0px;
                background: url(img/actualizar.gif) no-repeat;
                cursor: pointer;
            }
            .submit:focus{
                border: none;
                outline: none;
            }

            -->
        </style>
    </head>
    <body>
        <h1 align="center">Carrito</h1>
        <?php
        if ($carro) {
//si el carro no está vacío,
//mostramos los productos
            ?>

            <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr bgcolor="#333333" class="tit">
                    <td width="105">Producto</td>
                    <td width="207">Precio</td>
                    <td colspan="2" align="center">Cantidad de Unidades</td>
                    <td width="100" align="center">Borrar</td>
                    <td width="159" align="center">Actualizar</td>
                </tr>

                <?php
                $color = array("#ffffff", "#F0F0F0");
                $contador = 0;
//las 2 líneas anteriores
//sirven sólo para hacer
//una tabla con colores
//alternos
                $suma = 0;
//antes de recorrer todos
//los valores de la matriz
//$carro, ponemos a cero la
//variable $suma, en la que
//iremos sumando los subtotales
//del costo de cada item por la
//cantidad de unidades que se
//especifiquen
                foreach ($carro as $k => $v) {
//recorremos la matriz que tiene
//todos los valores del carro,
//calculamos el subtotal y el
// total
                
                          
                   if(isset($_POST['imageField'])) { 
                    $name = $_POST['cantidad'];  
                    $subto = $_POST['cantidad'] * $v['precio'];
                    $suma = $suma + $subto;
                    $contador++;              
                   
                    
                   //    echo'pasa por aqui';
                    
                    //    echo " <b> $name </b>";
                      echo " <b> $contador</b>";
 
               } else{
                   
                   $name = $v['cantidad'];
               }    
                    
                    
                    
//este es el contador que usamos
//para los colores alternos
                    ?>
                <div align="center"><span class="prod"><strong>Total de Artículos: <?php
                    echo $name;
//el total de items va a ser igual
//a la cantidad de elementos que
//tenga la matriz $carro, valor
//que obtenemos con la función
//count o con sizeof
                    ?></strong></span>
            </div><br>
                    <form name="a<?php echo $v['identificador'] ?>" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
                        <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'>
                            <td><?php echo $v['producto'] ?></td>
                            <td><?php echo $v['precio'] ?></td>
                            <td width="43" align="center"><?php echo $v['cantidad'] ?></td>
                            <td width="136" align="center">
                                <input name="cantidad" type="text" id="cantidad" value="<?php echo $name ?>" size="8">
                                <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
                            <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>"><img src="img/trash.gif" width="12" height="14" border="0"></a></td>
                            <td align="center">
                                <input name="imageField" type="submit" class="submit"  value="" width="20" height="20" border="0"></td>
                        </tr>
                    </form>
                    <?php
//por cada item creamos un
//formulario que submite a
//agregar producto y un link
//que permite eliminarlos
                }
                ?>
            </table>

            <div align="center"><span class="prod total">Total: $<?php
                    echo number_format($suma, 2);

//mostramos el total de la variable
//$suma formateándola a 2 decimales
                    ?></span>
            </div><br>
            <div align="center"><span class="prod">Continuar la selección de productos</span>
                <a href="catalogo.php?<?php echo SID; ?>">
                    <img src="img/continuar.gif" width="13" height="13" border="0"></a>
            </div>
        <?php } else { ?>
            <p align="center"> <span class="prod">No hay productos seleccionados</span>
                <a href="catalogo.php?<?php echo SID; ?>">
                    <img src="img/continuar.gif" width="13" height="13" border="0"></a>
            <?php } ?>
        </p>
    </body>
</html>

