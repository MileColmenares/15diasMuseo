<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "archivo_historico";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['nombre_serie'], $_POST['nuevo_valor']) && !empty($_POST['nombre_serie']) && !empty($_POST['nuevo_valor'])) {
    $nombre_serie = $_POST['nombre_serie'];
    $nuevo_valor = $_POST['nuevo_valor'];

    // Verificar si la subserie a actualizar existe
    $check_query = "SELECT nombre_serie FROM serie WHERE nombre_serie = '$nombre_serie'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // La subserie existe, proceder con la actualización
        $update_query = "UPDATE serie SET nombre_serie = '$nuevo_valor' WHERE nombre_serie = '$nombre_serie'";

        // Ejecutar la consulta de actualización
        if ($conn->query($update_query) === TRUE) {
            // Redirigir a la página "registrarSubserie.php"
            header("Location: registrarSerie.php");
            exit(); // Asegura que el script se detenga después de redirigir
        } else {
            echo "Error al actualizar datos: " . $conn->error;
        }
    } else {
        echo "La subserie a actualizar no existe";
    }
} else {
    echo "Por favor, complete todos los campos del formulario.";
}

$conn->close();
?>
