<?php
$nombre_documento=$_POST["nombre_documento"];
$fondo=$_POST["fondo"];
$subfondo=$_POST["subfondo"];
$serie=$_POST["serie"];
$subserie=$_POST["subserie"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$volumen_soporte=$_POST["volumen_soporte"];
$ubicacion=$_POST["ubicacion"];
$nombre_productor=$_POST["nombre_productor"];
$nombre_creador=$_POST["nombre_creador"];
$historia_archivistica=$_POST["historia_archivistica"];
$forma_ingreso=$_POST["forma_ingreso"];
$descripcion=$_POST["descripcion"];
$condicion_reproduccion=$_POST["condicion_reproduccion"];
$descripcion_estado=$_POST["descripcion_estado"];
$intervenciones=$_POST["intervenciones"];
$recomendaciones=$_POST["recomendaciones"];
$documentos_relacionados=$_POST["documentos_relacionados"];
$notas=$_POST["notas"];
$fecha_registro=$_POST["fecha_registro"];
$resp_registro=$_POST["resp_registro"];
$resp_control=$_POST["resp_control"];

echo $nombre_documento;

include ("conexion.php");

$insertar = "INSERT INTO unidad_documental VALUES (NULL,'$nombre_documento','$fondo','$subfondo','$serie','$subserie','$fecha_inicio',Null,'$volumen_soporte','$ubicacion','$nombre_productor','$nombre_creador','$historia_archivistica','$forma_ingreso','$descripcion','$condicion_reproduccion','$descripcion_estado','$descripcion_estado','$intervenciones','$recomendaciones','$documentos_relacionados','$notas','$fecha_registro','$resp_registro','$resp_control')";

echo $insertar;
//mysqli_query($datos_bd,$insertar) or exit ("no guardar");
echo "consulta envianda";
if ($datos_bd->query($insertar) === TRUE) {
    header("location:formulario.php");
} else {
    echo "Error al insertar el subfondo: " . $datos_bd->error;
}

?>