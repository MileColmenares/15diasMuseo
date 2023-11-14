<?php
    include("conexion.php");

//trae los datos del formulario

    $nombre_subfondo = $_POST['nombre_subfondo'];
    

//inserta los datos

    $sql = "INSERT INTO subfondo VALUES(NULL,'$nombre_subfondo')";
    
//si se pueden ingresar, deriva a la pagina principal

    if ($datos_bd->query($sql) === TRUE) {
        header("location:registrarSubfondo.php");
    } else {
        echo "Error al insertar el subfondo: " . $datos_bd->error;
    }

//cierra la conexion
    
    $datos_bd->close();
    ?>
?>