<!doctype html>
<html>

    <head>

        <meta charset="utf-8">
        <title>Documento sin título</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <h1> Alta de artículos nuevos</h1>

        <form action="Tabla_registros.php" method="post">
            <table>
                <tr><td><label>Cliente:</label></td><td> <input type="text" name="cli"></td></tr>
                <tr><td><label>Artículo:</label></td><td><input type="text" name="art"></td></tr>
                <tr><td><label>Fecha pedido:</label> </td><td><input type="text" name="fec_ped"></td></tr>
                <tr><td><label>Fecha entrega: </label></td><td><input type="text" name="fec_ent"></td></tr>
            <!--    <tr><td><label>Demora: </label></td><td><input type="text" name="demor"></td></tr>-->
                <tr><td><label>País de destino:</label> </td><td><input type="text" name="pais_des"></td></tr>
                <tr><td><label>Ciudad de destino: </label></td><td><input type="text" name="ciud_des"></td></tr>
                <tr><td><label>Precio unidad: </label></td><td><input type="text" name="precio_uni"></td></tr>
                <tr><td><label>Cantidad: </label></td><td><input type="text" name="cant"></td></tr>
                <tr><td><label>Descuento: </label></td><td><input type="text" name="desc"></td></tr>
               <!-- <tr><td><label>Subtotal: </label></td><td><input type="text" name="subtot"></td></tr>-->

                <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="guardar" value="Guardar"></td></tr>
                
            </table>
        </form>

    </body>

</html>