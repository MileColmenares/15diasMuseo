<?php
$conexion = mysqli_connect("localhost", "root", "", "archivo_historico1");

if (isset($_GET['nombre_subfondo']) && !empty($_GET['nombre_subfondo'])) {
    $nombre_subfondo = $_GET['nombre_subfondo'];
    //echo "Nombre subfondo a eliminar: $nombre_subfondo";

    // Verificar si la subserie existe antes de intentar eliminar
    $verificar_sql = "SELECT * FROM subfondo WHERE nombre_subfondo = '$nombre_subfondo'";
    $result = mysqli_query($conexion, $verificar_sql);

    if (mysqli_num_rows($result) > 0) {
        // La subserie existe, ejecutar la consulta de eliminación
        $sql = "DELETE FROM subfondo WHERE nombre_subfondo = '$nombre_subfondo'";
        //echo "Consulta SQL: $sql";

        // Ejecutar la consulta y verificar el resultado
        if (mysqli_query($conexion, $sql)) {
            echo "El registro se eliminó correctamente.";
            // Redirigir después de la eliminación exitosa
            header("Location:registrarSubfondo.php");
            exit();
        } else {
            echo "Error al eliminar el registro: " . mysqli_error($conexion);
        }
    } else {
        // La subserie no existe
        echo "El subfondo elegido no existe.";
    }
} else {
    echo "Nombre del dato no válido.";
}

mysqli_close($conexion);
exit();
?>
