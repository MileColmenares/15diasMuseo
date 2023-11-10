<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" type="text/css" href="css/buscador.css">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

        
<div class="container mt-5 custom-form">
    <form action="" method="get">
        <div class="form-group input-group input-group-sm mb-3">
        <input placeholder="buscar por nombre" class="form-control me-2" type="text" name="busqueda">
        <input class="btn input-group-text" type="submit" name="enviar" value="Buscar">
        </div>
    </form>
</div>
    <br><br><br>
    <div class="container-fluid">
    <?php
    
    if(isset($_GET['enviar'])){

        $busqueda = $_GET['busqueda'];

        $consulta = $datos_bd-> query("SELECT * FROM unidad_documental u WHERE u.nombre_documento AND u.nombre_creador AND u.nombre_productor LIKE '%$busqueda%'");


        if ($consulta->num_rows > 0) {
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
            while($row = $consulta->fetch_assoc()) {
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
                echo "</tr>";           }
        } else {
            echo "No se encontraron resultados.";
        }
    } 


      //  while ($row = $consulta-> fetch_array()) {
        //    echo $row['nombre_documento'] ;
        //} 
    //}else {
      //      echo "no se encontro el documento" . $datos_bd->error;
        //}
    
    //$datos_bd->close();


    ?>
</div>






</body>
</html>