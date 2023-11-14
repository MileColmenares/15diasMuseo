
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
        echo "<div class='table-responsive'>";
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Fondo, subfondo, serie</th>";
        echo "<th>Nombre</th>";
        echo "<th>Fecha(s)</th>";
        echo "<th>Volumen y soporte</th>";
        echo "<th>Ubicación</th>";
        echo "<th>Nombre del productor</th>";
        echo "<th>Nombre del creador</th>";
        echo "<th>Forma de ingreso</th>";
        echo "<th>Descripción</th>";
        echo "<th>Condición de acceso</th>";
        echo "<th>Condición de reproducción</th>";
        echo "<th>Descripción de estado</th>";
        echo "<th>Intervenciones y recomendaciones</th>";
        echo "<th>Documentos relacionados</th>";
        echo "<th>Notas</th>";
        echo "<th>Responsables</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        

// Tu código para llenar las filas de la tabla
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td data-label='Id'>" . $row['id_documento'] . "</td>";
    echo "<td data-label='Fondo, subfondo, serie'>" . $row['id_fondo'] . "<br>" . $row['id_subfondo'] ."<br>" . $row['id_serie'] ."<br>" . $row['id_subserie'] . "</td>";
    echo "<td data-label='Nombre'>" . $row['nombre_documento'] . "</td>";
    echo "<td data-label='Fecha(s)'>" . $row['fecha_inicio'] . "<br>" . $row['fecha_final'] . "</td>";
    echo "<td data-label='Volumen y soporte'>" . $row['volumen_soporte'] . "</td>";
    echo "<td data-label='Ubicación'>" . $row['ubicacion'] . "</td>";
    echo "<td data-label='Nombre del productor'>" . $row['nombre_productor'] . "</td>";
    echo "<td data-label='Nombre del creador'>" . $row['nombre_creador'] . "</td>";
    echo "<td data-label='Forma de ingreso'>" . $row['forma_ingreso'] . "</td>";
    echo "<td data-label='Descripción'>" . $row['descripcion'] . "</td>";
    echo "<td data-label='Condición de acceso'>" . $row['condicion_acceso'] . "</td>";
    echo "<td data-label='Condición de reproducción'>" . $row['condicion_reproduccion'] . "</td>";
    echo "<td data-label='Descripción de estado'>" . $row['descripcion_estado'] . "</td>";
    echo "<td data-label='Intervenciones y recomendaciones'>" . $row['intervenciones'] . "<br>" . $row['recomendaciones'] . "</td>";
    echo "<td data-label='Documentos relacionados'>" . $row['documentos_relacionados'] . "</td>";
    echo "<td data-label='Notas'>" . $row['notas'] . "</td>";
    echo "<td data-label='Responsables'>" . "Responsable del registro: " . $row['resp_registro'] . "<br> Responsable del control: " . $row['resp_control'] . "</td>";

    echo "</tr>";
}
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
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


