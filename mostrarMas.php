<?php
    include("header.php");
    include("conexion.php");

?>
<head>
<link rel="stylesheet" type="text/css" href="css/mostrarMass.css">
<link rel="icon" href="./img/logo.jpg" type="logo.jpg">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<title>Ver Más</title>
</head>
<body>

</br>

    <?php

    $id = $_GET["id"];
    // obtener datos
    $sql = "SELECT * FROM unidad_documental1
    WHERE id_documento = $id";

    $result = $datos_bd->query($sql);
    if ($result->num_rows > 0) {
        echo "<div class= 'containerQ'>";
        echo "<table class='tableA'>";


    while ($row = $result->fetch_assoc()) {
    
        echo "<div class='data-section'>";
        echo "<h2>Nombre</h2>";
        echo "<p class='data-value'>" . $row['nombre_documento'] . "</p>";
        echo "</div>";
        echo "<h2>Fondo, subfondo, serie</h2>" . $row['id_fondo'] . $row['id_subfondo'] . $row['id_serie'] . $row['id_serie'];
        echo "<h2>Volumen de soporte</h2>" . $row['volumen_soporte'];
        echo "<h2>Productor y creador</h2>" . $row['nombre_productor'] . " - " . $row['nombre_creador'];
        echo "<h2>Forma de ingreso</h2>" . $row['forma_ingreso'];
        echo "<h2>Descripción</h2>" . $row['descripcion'];
        echo "<h2>Estado de conservación</h2>" . $row['estado_conservacion'];
        echo "<h2>Documentos relacionados</h2>" . $row['documentos_relacionados'];
        echo "<h2>Notas</h2>" . $row['notas'];
        echo "<h2>Fecha de registro</h2>" . $row['fecha_registro'];
        echo "<h2>Responsable de registro</h2>" . $row['resp_registro'];
        echo "<h2>Responsable de control</h2>" . $row['resp_control'];
    }
    }

?>
</br>
        <div class="container text-center">
            <a href="menuIngresar.php">
            <button type="button" class="btn btn-custom">Descargar</button>
            </a>
</br>
        </div>
</body>