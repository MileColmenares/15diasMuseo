<?php
$conexion = mysqli_connect("localhost", "root", "", "archivo_historico1");

if (isset($_GET['nombre_serie']) && !empty($_GET['nombre_serie'])) {
    $nombre_serie = $_GET['nombre_serie'];
    //echo "Nombre de serie a eliminar: $nombre_serie";

    $sql = "DELETE FROM serie WHERE nombre_serie = '$nombre_serie'";
    //echo "Consulta SQL: $sql";

    // Ejecutar la consulta y verificar el resultado
    if (mysqli_query($conexion, $sql)) {
        $filas_afectadas = mysqli_affected_rows($conexion);

        if ($filas_afectadas > 0) {
            echo "El registro se eliminó correctamente.";
            // Redirigir después de la eliminación exitosa
            header("Location:registrarSerie.php");
            exit();
        } else {
            echo "La serie elegida no existe.";
        }
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    echo "Nombre del dato no válido.";
}

mysqli_close($conexion);
exit();
?>
