<?php
$conexion = mysqli_connect("localhost", "root", "", "archivo_historico");

if (isset($_GET['nombre_subfondo']) && !empty($_GET['nombre_subfondo'])) {
    $nombre_subfondo = $_GET['nombre_subfondo'];
    echo "Nombre subfondo a eliminar: $nombre_subfondo";

    $sql = "DELETE FROM subfondo WHERE nombre_subfondo = '$nombre_subfondo'";
    echo "Consulta SQL: $sql";

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
    echo "Nombre del dato no válido.";
}

mysqli_close($conexion);
exit();
?>
