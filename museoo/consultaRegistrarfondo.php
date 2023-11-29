<?php
$hostname = "localhost";
$username = "root"; 
$password = "";
$database = "archivo_historico1"; 
$datos_bd = new mysqli($hostname, $username, $password, $database);

// Verificar la conexión
if ($datos_bd->connect_error) {
    die("Error de conexión a la base de datos: " . $datos_bd->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre_fondo = $_POST["nombre_fondo"];
    
    $sql = "INSERT INTO fondo (codigo, nombre_fondo) VALUES ('$codigo', '$nombre_fondo')";

    if ($datos_bd->query($sql) === TRUE) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . $datos_bd->error;
    }
}
?>

