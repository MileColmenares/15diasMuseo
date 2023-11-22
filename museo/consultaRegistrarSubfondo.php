<?php
$hostname = "localhost";
$username = "root"; 
$password = "";
$database = "archivo_historico"; 
$datos_bd = new mysqli($hostname, $username, $password, $database);    

if ($datos_bd->connect_error) {
    die("Error de conexión a la base de datos: " . $datos_bd->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_subfondo = $_POST["nombre_subfondo"];
    
    $sql = "INSERT INTO subfondo (nombre_subfondo) VALUES ('$nombre_subfondo')";

    if ($datos_bd->query($sql) === TRUE) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al insertar datos: " . $datos_bd->error;
    }
    
}

