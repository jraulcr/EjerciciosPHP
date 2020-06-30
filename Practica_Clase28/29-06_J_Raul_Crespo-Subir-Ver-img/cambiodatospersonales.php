   
<?php

require ("datosConexionBBDD.php");

// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

//Si existe imagen y tiene un tamaño correcto
if (!is_null($nombre_img) && $tamano <= 200000) {
    //indicamos los formatos que permitimos subir a nuestro servidor
    if (($_FILES["imagen"]["type"] == "image/gif") || ($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/jpg") || ($_FILES["imagen"]["type"] == "image/png")) {

        // Ruta donde se guardarán las imágenes que subamos
        $directorio = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $nombre_img);





        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

        mysqli_set_charset($conexion, "utf8");

        /* en pasos anteriores deberíamos tener una conexión abierta a nuestra base de 
          datos para ejecutar nuestra sentencia SQL */

        /* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen 
          el nombre de nuestra imagen */

        $sql = "INSERT INTO USUARIOSIMG (RUTAIMAGEN) VALUES ('$nombre_img')";

        //$sql = "UPDATE USUARIOSIMG SET RUTAIMAGEN = '$nombre_img'";    

        $result = mysqli_query($conexion, $sql);
        //echo $sql y comprueba que esta bien la actualizacion 
        /* volvemos a la página principal para cargar la imagen que hemos subido */
        header("Location: paginaperfil.php");
    } else {
        //si no cumple con el formato
        echo "No se puede subir una imagen con ese formato ";
    }
} else {
    //si existe la variable pero se pasa del tamaño permitido
    if (!is_null($nombre_img))
        echo "La imagen es demasiado grande ";
}
?>

