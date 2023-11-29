<?php
$conexion = mysqli_connect("localhost", "root", "", "archivo_historico1");

if (isset($_GET['nombre_subserie']) && !empty($_GET['nombre_subserie'])) {
    $nombre_subserie = $_GET['nombre_subserie'];
    //echo "Nombre subserie a eliminar: $nombre_subserie";

    // Verificar si la subserie existe antes de intentar eliminarla
    $verificacion_sql = "SELECT * FROM subserie WHERE nombre_subserie = '$nombre_subserie'";
    $result = mysqli_query($conexion, $verificacion_sql);

    if (mysqli_num_rows($result) > 0) {
        // La subserie existe, ejecutar la consulta de eliminación
        $sql = "DELETE FROM subserie WHERE nombre_subserie = '$nombre_subserie'";
        //echo "Consulta SQL: $sql";

        // Ejecutar la consulta y verificar el resultado
        if (mysqli_query($conexion, $sql)) {
            echo "El registro se eliminó correctamente.";
            // Redirigir después de la eliminación exitosa
            header("Location:registrarSubserie.php");
            exit();
        } else {
            echo "Error al eliminar el registro: " . mysqli_error($conexion);
        }
    } else {
        // La subserie no existe
        echo "La subserie elegida no existe.";
    }
} else {
    echo "Nombre del dato no válido.";
}

mysqli_close($conexion);
exit();
?>
