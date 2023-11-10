
<head>
<link rel="stylesheet" type="text/css" href="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="PRUEBA.css">

</head>


    <?php
    include("conexion.php");

    
    include("header.php");
    include ("buscador.php");
    // obtener datos
    $sql = "SELECT * FROM unidad_documental WHERE id_documento";
    $result = $datos_bd->query($sql);
    if ($result->num_rows > 0) {
        echo "<div class'containerQ'>";
        echo "<table class='tableA'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Fechas</th>";
        echo "<th>Volumen y soporte</th>";
        echo "<th>Ubicación</th>";
        echo "<th>Nombre del productor</th>";
        echo "<th>Nombre del creador</th>";
        echo "<th>Historia archivística</th>";
        echo "<th>Forma de ingreso</th>";
        echo "<th>Descripción</th>";
        echo "<th>Condición de acceso</th>";
        echo "<th>Condición de reproducción</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "</div>";
// Tu código para llenar las filas de la tabla
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td data-label='Id'>" . $row['id_documento'] . "</td>";
    echo "<td data-label='Nombre'>" . $row['nombre_documento'] . "</td>";
    echo "<td data-label='Fechas'>" . $row['fecha_inicio'] . "<br>" . $row['fecha_final'] . "</td>";
    echo "<td data-label='Volumen y soporte'>" . $row['volumen_soporte'] . "</td>";
    echo "<td data-label='Ubicación'>" . $row['id_ubicacion'] . "</td>";
    echo "<td data-label='Nombre del productor'>" . $row['nombre_productor'] . "</td>";
    echo "<td data-label='Nombre del creador'>" . $row['nombre_creador'] . "</td>";
    echo "<td data-label='Historia archivística'>" . $row['historia_archivistica'] . "</td>";
    echo "<td data-label='Forma de ingreso'>" . $row['forma_ingreso'] . "</td>";
    echo "<td data-label='Descripción'>" . $row['descripcion'] . "</td>";
    echo "<td data-label='Condición de acceso'>" . $row['condicion_acceso'] . "</td>";
    echo "<td data-label='Condición de reproducción'>" . $row['condicion_reproduccion'] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";

    //echo "<td><a href='modificar.php?id=" . $row['id_documento'] . "'>Modificar</a></td>";
   // echo "<td><a href='eliminar.php?id=" . $row['id_documento'] . "'>Eliminar</a></td>";


} else {
echo "No hay datos para mostrar.";
}
echo "</tbody>";
echo "</table>";
echo "</div>";


        
        

       

    // Cierra la conexión
    $datos_bd->close();
    ?>
</div>         
    </body>
    </html>
    <?php


