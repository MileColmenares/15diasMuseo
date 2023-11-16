<?php
$nombre_documento=$_POST["nombre_documento"];
$fondo=$_POST["fondo"];
$subfondo=$_POST["subfondo"];
$serie=$_POST["serie"];
$subserie=$_POST["subserie"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$ubicacion=$_POST["ubicacion"];
$volumen_soporte=$_POST["volumen_soporte"];
$nombre_productor=$_POST["nombre_productor"];
$nombre_creador=$_POST["nombre_creador"];
$forma_ingreso=$_POST["forma_ingreso"];
$descripcion=$_POST["descripcion"];
$estado_conservacion=$_POST["estado_conservacion"];
$condicion_acceso=$_POST["condicion_acceso"];
$condicion_reproduccion=$_POST["condicion_reproduccion"];
$documentos_relacionados=$_POST["documentos_relacionados"];
$notas=$_POST["notas"];
$fecha_registro=$_POST["fecha_registro"];
$resp_registro=$_POST["resp_registro"];
$resp_control=$_POST["resp_control"];

echo $nombre_documento;

include ("conexion.php");

$insertar = "INSERT INTO unidad_documental1 VALUES (NULL,'$nombre_documento','$fondo','$subfondo','$serie','$subserie','$fecha_inicio',Null,'$ubicacion','$volumen_soporte','$nombre_productor','$nombre_creador','$forma_ingreso','$descripcion','$estado_conservacion','$condicion_acceso','$condicion_reproduccion','$documentos_relacionados','$notas','$fecha_registro','$resp_registro','$resp_control')";

echo $insertar;
//mysqli_query($datos_bd,$insertar) or exit ("no guardar");
echo "consulta envianda";
if ($datos_bd->query($insertar) === TRUE) {
    header("location:formulario.php");
} else {
    echo "Error al insertar el subfondo: " . $datos_bd->error;
}

?>