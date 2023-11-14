<?php
    include("conexion.php");

//trae los datos del formulario

    $nombre_subserie = $_POST['nombre_subserie'];
    $nombre_serie = $_POST['nombre_serie'];

//inserta los datos

   // $sql = "INSERT INTO serie (nombre_serie, nombre_subserie, nombre_subfondo) VALUES (?, ?, ?)";
    $sql = "INSERT INTO subserie VALUES(NULL,'$nombre_subserie','$nombre_serie')";
    
//si se pueden ingresar, deriva a la pagina principal

    if ($datos_bd->query($sql) === TRUE) {
        header("location:registrarSubserie.php");
    } else {
        echo "Error al insertar el subfondo: " . $datos_bd->error;
    }

//cierra la conexion
    
    $datos_bd->close();
    ?>
?>