<?php
$nombre_documento=$_POST["nombre_documento"];
$id_fondo=$_POST["id_fondo"];
$id_subfondo=$_POST["id_subfondo"];
$id_serie=$_POST["id_serie"];
$id_subserie=$_POST["id_subserie"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$volumen_soporte=$_POST["volumen_soporte"];
$id_ubicacion=$_POST["id_ubicacion"]
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

$conexion= mysqli_connect("localhost","root","","archivo_historico");


$insertar = "INSERT INTO unidad_documental VALUES (NULL,NULL,NULL,NULL'$nombre_documento','$fecha_inicio',$fecha_final,'$volumen_soporte',NULL,'$nombre_productor','$nombre_creador','$historia_archivistica','$forma_ingreso','$descripcion','$condicion_reproduccion','$descripcion_estado','$condiciones_accesibilidad','$descripcion_estado','$intervenciones','$recomendaciones','$documentos_relacionados','$notas','$fecha_registro','$resp_registro','$resp_control')";

echo $insertar;
mysqli_query($conexion,$insertar) or exit ("no guardar");
echo "consulta envianda";

?>