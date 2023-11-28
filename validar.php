<?php
//conexion con la Base De Datos
include("conexion.php");

//guarda los datos en una variable
$nombre = $_POST['usuario'];
$password = $_POST['password'];

//compara los datos ingresados con los datos de la tabla
$log_consult = mysqli_query($datos_bd, "SELECT * FROM `usuario` WHERE `usuario` = '$nombre' and `contraseña` ='$password'");
$lista_consulta = mysqli_fetch_assoc($log_consult);

//si los datos ingresados son correctos,ingresa al menu,sino muestra un mensaje de "Usuario o contraseña incorrectos."
if ($lista_consulta !== null && $lista_consulta["usuario"] == $nombre) {
    header("Location: index.php");
    exit; 
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
