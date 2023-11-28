<?php
    include("conexion.php");

//trae los datos del formulario

    $nombre_serie = $_POST['nombre_serie'];
    $nombre_subserie = $_POST['nombre_subserie'];
    $subfondo = $_POST['nombre_subfondo'];

//inserta los datos

   // $sql = "INSERT INTO serie (nombre_serie, nombre_subserie, nombre_subfondo) VALUES (?, ?, ?)";
    $sql = "INSERT INTO serie VALUES(NULL,'$nombre_serie','$nombre_subserie','$subfondo')";
    
//si se pueden ingresar, deriva a la pagina principal

    if ($datos_bd->query($sql) === TRUE) {
        header("location:registrarSerie.php");
    } else {
        echo "Error al insertar el subfondo: " . $datos_bd->error;
    }

//cierra la conexion
    
    $datos_bd->close();
    ?>
?>