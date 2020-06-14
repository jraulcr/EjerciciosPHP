<HTML LANG="es">

    <HEAD>
        <TITLE>Inserción de vivienda</TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </HEAD>

    <BODY>

        <?PHP        
        $db_host = "localhost";
        $db_usuario = "cursophp-ad";
        $db_contra = "";
        $db_nombre = "lindavista";        
        
        // Obtener valores introducidos en el formulario        
        function isInsert() {
            if (isset($_REQUEST['insertar'])) {
                return true;
            }
            return false;
        }

        if (isInsert()) {
            $insertar = $_REQUEST['insertar'];
            $tipo = $_REQUEST['tipo'];
            $zona = $_REQUEST['zona'];
            $direccion = $_REQUEST['direccion'];
            $ndormitorios = $_REQUEST['ndormitorios'];
            $precio = $_REQUEST['precio'];
            $tamano = $_REQUEST['tamano'];
            if(empty($_REQUEST['extras'])){
                $extras = 0;
            }else{
                $extras = $_REQUEST['extras'];
            }
            $observaciones = $_REQUEST['observaciones'];
        }

        $error = false;
        if (isset($insertar)) {

            // Comprobar errores
            // Direcci�n
            if (trim($direccion) == "") {
                $errores["direccion"] = "¡Se requiere la dirección de la vivienda!";
                $error = true;
            } else {
                $errores["direccion"] = "";
            }
            // Precio
            if (!is_numeric($precio)) {
                $errores["precio"] = "¿El precio debe ser un valor numúrico!";
                $error = true;
            } else {
                $errores["precio"] = "";
            }
            // Tama�o
            if (!is_numeric($tamano)) {
                $errores["tamano"] = "¡El tamaño debe ser un valor numérico!";
                $error = true;
            } else {
                $errores["tamano"] = "";
            }           
            
            //Extras
        /*    if(empty($_REQUEST['extras'])){
                $errores["extras"] = "¡Marcar extras!";
                $error = true;
            } else {
                $errores["extras"] = "";
            }
        */    
            //Foto
            if($_FILES['foto']['name'] == ""){
                $errores["foto"] = "¡Insertar archivo!";
                $error = true;
            } else {
                $errores["foto"] = "";
            }
            
            
            
            // Subir fichero con la foto de la vivienda
            $copiarFichero = false;

            // Copiar fichero en directorio de ficheros subidos
            // Se renombra para evitar que sobreescriba un fichero existente
            // Para garantizar la unicidad del nombre se a�ade una marca de tiempo
            if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
                $nombreDirectorio = "fotos/";
                $nombreFichero = $_FILES['foto']['name'];
                $copiarFichero = true;

                // Si ya existe un fichero con el mismo nombre, renombrarlo
                $nombreCompleto = $nombreDirectorio . $nombreFichero;
                if (is_file($nombreCompleto)) {
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                }
            }
            // El fichero introducido supera el l�mite de tama�o permitido
            else if ($_FILES['foto']['error'] == UPLOAD_ERR_FORM_SIZE) {
                $maxsize = $_REQUEST['MAX_FILE_SIZE'];
                $errores["foto"] = "¡El tamaño del fichero supera el límite permitido ($maxsize bytes)!";
                $error = true;
            }
            // No se ha introducido ning�n fichero
            else if ($_FILES['foto']['name'] == "") {
                $nombreFichero = '';
            }
            // El fichero introducido no se ha podido subir
            else {
                $errores["foto"] = "¡No se ha podido subir el fichero!";
                $error = true;
            }
        }

        // Si los datos son correctos, procesar formulario
        if (isset($insertar) && $error == false) {

            // Insertar la vivienda en la Base de Datos
            $conexion = mysqli_connect($db_host, $db_usuario, $db_contra)
                    or die("No se puede conectar con el servidor");

            mysqli_select_db($conexion, $db_nombre)
                    or die("No se puede seleccionar la base de datos");

            mysqli_set_charset($conexion, "utf8");
            
            $n = count($extras);
                       
            if ($n > 0) {
                $ex = $extras[0];
                for ($i = 1; $i < $n; $i++) {
                    $ex = $ex . "," . $extras[$i];
                }
            } else {
                $ex = "";
            }

            echo $ex;
            
            $instruccion = "insert into viviendas (tipo, zona, direccion, ndormitorios, " .
                    "precio, tamano, extras, foto, observaciones) values " .
                    "('$tipo', '$zona', '$direccion', '$ndormitorios', " .
                    "'$precio', '$tamano', '$ex', '$nombreFichero', '$observaciones')";

            $consulta = mysqli_query($conexion, $instruccion)
                    or die("Fallo en la inserción");
            mysqli_close($conexion);

            // Mover foto a su ubicaci�n definitiva
            if ($copiarFichero) {
                move_uploaded_file($_FILES['foto']['tmp_name'], $nombreDirectorio . $nombreFichero);
            }

            print ("<H1>Inserción de vivienda</H1>\n");
            print ("<P>Estos son los datos introducidos:</P>\n");
            print ("<UL>\n");
            print ("   <LI>Tipo: $tipo\n");
            print ("   <LI>Zona: $zona\n");
            print ("   <LI>Dirección: $direccion\n");
            print ("   <LI>Número de dormitorios: $ndormitorios\n");
            print ("   <LI>Precio: $precio &euro;\n");
            print ("   <LI>Tamaño: $tamano metros cuadrados\n");
            print ("   <LI>Extras: $ex ");
            if(!empty($extras)){
              print (implode(', ', $extras));
            }
           /* foreach ($extras as $extra) {
                print ($extra . " ");
            }*/
            
            print ("\n");

            if ($copiarFichero == true) {
                print ("   <LI>Foto: <A TARGET='_blank' HREF='$nombreDirectorio$nombreFichero'>$nombreFichero</A>\n");
            } else {
                print ("   <LI>Foto: (no hay)\n");
            }

            print ("   <LI>Observaciones: $observaciones\n");
            print ("</UL>\n");
            print ("<P>[ <A HREF='practica10a.php'>Insertar otra vivienda</A> ]</P>\n");
        } else {
            ?>

            <H1>Inserción de vivienda</H1>

            <P>Introduzca los datos de la vivienda:</P>

            <FORM CLASS="borde" ACTION="practica10a.php" METHOD="POST" ENCTYPE="multipart/form-data">

                <P><LABEL>Tipo de vivienda:</LABEL>
                    <SELECT NAME="tipo">
                        <OPTION VALUE="Piso" SELECTED>Piso
                        <OPTION VALUE="Adosado">Adosado
                        <OPTION VALUE="Chalet">Chalet
                        <OPTION VALUE="Casa">Casa
                    </SELECT></P>

                <P><LABEL>Zona:</LABEL>
                    <SELECT NAME="zona">
                        <OPTION VALUE="Centro">Centro
                        <OPTION VALUE="Nervión">Nervión
                        <OPTION VALUE="Triana">Triana
                        <OPTION VALUE="Aljarafe">Aljarafe
                        <OPTION VALUE="Macarena">Macarena
                    </SELECT></P>

                <P><LABEL>Dirección:</LABEL>
                    <INPUT TYPE="TEXT" NAME="direccion"

    <?PHP
    if (isset($insertar)) {
        print (" VALUE='$direccion'>\n");
    } else {
        print (">\n");
    }
    if (isInsert() && $errores["direccion"] != "") {
        print ("<BR><SPAN CLASS='error'>" . $errores["direccion"] . "</SPAN>");
    }
    ?>
    </P>

                <P><LABEL>Número de dormitorios:</LABEL>
                    <INPUT TYPE="radio" NAME="ndormitorios" VALUE="1">1
                    <INPUT TYPE="radio" NAME="ndormitorios" VALUE="2">2
                    <INPUT TYPE="radio" NAME="ndormitorios" VALUE="3" CHECKED>3
                    <INPUT TYPE="radio" NAME="ndormitorios" VALUE="4">4
                    <INPUT TYPE="radio" NAME="ndormitorios" VALUE="5">5</P>

                <P><LABEL>Precio:</LABEL>
                    <INPUT TYPE="TEXT" NAME="precio"

    <?PHP
    if (isset($insertar)) {
        print (" VALUE='$precio'> &euro;\n");
    } else {
        print ("> &euro;\n");
    }
    if (isInsert() && $errores["precio"] != "") {
        print ("<BR><SPAN CLASS='error'>" . $errores["precio"] . "</SPAN>");
    }
    ?>
                           </P>

                <P><LABEL>Tamaño:</LABEL>
                    <INPUT TYPE="TEXT" NAME="tamano"

                           <?PHP
                           if (isset($insertar)) {
                               print (" VALUE='$tamano'> metros cuadrados\n");
                           } else {
                               print ("> metros cuadrados\n");
                           }
                           if (isInsert() && $errores["tamano"] != "") {
                               print ("<BR><SPAN CLASS='error'>" . $errores["tamano"] . "</SPAN>");
                           }
                           ?>
                           </P>

                <P><LABEL>Extras (marque los que procedan):</LABEL>
                    <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Piscina">Piscina
                    <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Jardin">Jardín
                    <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Garage">Garage
<?PHP
 if (isInsert() && $errores["extras"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["extras"] . "</SPAN>");
?>
</P>

                <P><LABEL>Foto:</LABEL>
                    <INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
                    <INPUT TYPE="FILE" NAME="foto">

    <?PHP
    if (isInsert() && $errores["foto"] != "") {
        print ("<BR><SPAN CLASS='error'>" . $errores["foto"] . "</SPAN>");
    }
    ?>
                </P>

                <P><LABEL>Observaciones:</LABEL>
                    <TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

    <P><INPUT TYPE="submit" NAME="insertar" VALUE="Insertar vivienda"></P>

    </FORM>

    <?PHP
}
?>

</BODY>
</HTML>
