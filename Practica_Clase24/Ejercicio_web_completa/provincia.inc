
<SCRIPT LANGUAGE='JavaScript'>
    <!–
function actualizaPagina ()
    {
            i = document.forms.formulario.prov.selectedIndex;
    categoria = document.forms.formulario.prov.options[i].value;
    window.location = 'paginalistado.php?prov=' + categoria;
    }
    
    // –>
</SCRIPT>
<h1>Todos mis contactos</h1>
<form name="formulario" action="paginalistado.php" method="get">
    Mostrar contactos por provincia:
        <select name="prov" onchange='actualizaPagina()'>
            <?php
            if (!isset($_GET['prov'])) { // Si yo he escrito listadoporprovincia.php sin parámetros
                echo "<option value='Todas' selected>Todas</option>";
            } elseif ($_GET['prov'] == "Todas") {
                echo "<option value='Todas' selected>Todas</option>";
            } else {
                echo "<option value='Todas'>Todas</option>";
            }
// Conectar con el Servidor
            $link = mysql_connect("localhost", "root", "acrear2012")
                    or die("No puedo conectarme con el servidor");
// Usar la BD
            mysql_select_db("agenda", $link)
                    or die("No puedo abrir la BD");
// Hacer la consulta
            $consulta = "SELECT provincia FROM agenda GROUP BY provincia";
            $resultado = mysql_query($consulta, $link)
                    or die("No puedo ejecutar la consulta");
// Voy leyendo fila a fila
            while ($fila = mysql_fetch_array($resultado)) {
                echo "<option value='" . $fila['provincia'] . "'";
                if (isset($_GET['prov']))
                    if ($_GET['prov'] == $fila['provincia'])
                        echo " selected";
                echo ">" . $fila['provincia'] . "</option>\n";
            }
            mysql_close($link);
            ?>
        </select>
</form>
<table>
    <tr>
        <th>NOMBRE</th><th>DIRECCI&Oacute;N</th><th>TEL&Eacute;FONO</th><th>EMAIL</th><th>PROVINCIA</th>
    </tr>
<?php
// Conectar con el Servidor
$link = mysql_connect("localhost", "root", "acrear2012")
        or die("No puedo conectarme con el servidor");
// Usar la BD
mysql_select_db("agenda", $link)
        or die("No puedo abrir la BD");
// Hacer la consulta
if (!isset($_GET['prov']))
    $consulta = "SELECT * FROM agenda";
elseif ($_GET['prov'] == "Todas")
    $consulta = "SELECT * FROM agenda";
else
    $consulta = "SELECT * FROM agenda WHERE provincia='" . $_GET['prov'] . "'";
$resultado = mysql_query($consulta, $link)
        or die("No puedo ejecutar la consulta");
// Voy leyendo fila a fila
$i = 0;
while ($fila = mysql_fetch_array($resultado)) {
    if ($i % 2 == 0) {
        echo "<tr>";
    } else {
        echo "<tr id='naranja'>";
    }
    $i++;
// Celda del Nombre completo = Nombre + Apellido1 + Apellido2
    echo "<td>" . $fila['nombre'] . " " . $fila['apellido1'] . " " . $fila['apellido2'] . "</td>";
// Celda de la dirección
    echo "<td>" . $fila['direccion'] . "</td>";
// Celda del teléfono
    echo "<td>" . $fila['telefono'] . "</td>";
// Celda del email
    echo "<td>" . $fila['email'] . "</td>";
    echo "<td>" . $fila['provincia'] . "</td>";
    echo "</tr>\n";
}
mysql_close($link);  // Cerrar la conexión
?>
</table>

