<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "archivo_historico1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['nombre_subfondo'], $_POST['nuevo_valor']) && !empty($_POST['nombre_subfondo']) && !empty($_POST['nuevo_valor'])) {
    $nombre_subfondo = $_POST['nombre_subfondo'];
    $nuevo_valor = $_POST['nuevo_valor'];

    // Verificar si la subserie a actualizar existe
    $check_query = "SELECT nombre_subfondo FROM subfondo WHERE nombre_subfondo = '$nombre_subfondo'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // La subserie existe, proceder con la actualización
        $update_query = "UPDATE subfondo SET nombre_subfondo = '$nuevo_valor' WHERE nombre_subfondo = '$nombre_subfondo'";

        // Ejecutar la consulta de actualización
        if ($conn->query($update_query) === TRUE) {
            // Redirigir a la página "registrarSubserie.php"
            header("Location: registrarSubfondo.php");
            exit(); // Asegura que el script se detenga después de redirigir
        } else {
            echo "Error al actualizar datos: " . $conn->error;
        }
    } else {
        echo "El subfondo a actualizar no existe";
    }
} else {
    echo "Por favor, complete todos los campos del formulario.";
}

$conn->close();
?>
