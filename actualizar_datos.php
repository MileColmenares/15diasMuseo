<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "archivo_historico";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['id_subfondo'], $_POST['nuevo_valor']) && !empty($_POST['id_subfondo']) && !empty($_POST['nuevo_valor'])) {
  

    $id_subfondo = $_POST['id_subfondo'];
    $nuevo_valor = $_POST['nuevo_valor'];

    // Crear la consulta preparada
    $stmt = $conn->prepare("UPDATE subfondo SET nombre_subfondo = ? WHERE id_subfondo = ?");

    // Verificar si la consulta preparada se creó correctamente
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Vincular los parámetros
    $stmt->bind_param("si", $nuevo_valor, $id_subfondo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error al actualizar datos: " . $stmt->error;
    }
} else {
    echo "Por favor, complete todos los campos del formulario.";
}

$conn->close();
?>
