<?php
$nombre_documento=$_POST["nombre_documento"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$n_folios=$_POST["n_folios"];
$cant_elementos=$_POST["cant_elementos"];
$medidas=$_POST["medidas"];
$nombre_productor=$_POST["nombre_productor"];
$nombre_creador=$_POST["nombre_creador"];
$historia_archivistica=$_POST["historia_archivistica"];
$forma_ingreso=$_POST["forma_ingreso"];
$descripcion=$_POST["descripcion"];
$tipo_soporte=$_POST["tipo_soporte"];
$descripcion_soporte=$_POST["descripcion_soporte"];
$accesibilidad=$_POST["accesibilidad"];
$condiciones_accesibilidad=$_POST["condiciones_accesibilidad"];
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


$insertar = "INSERT INTO unidad_documental VALUES (NULL,'$nombre_documento','$fecha_inicio',$fecha_final,'$n_folios','$cant_elementos','$medidas','$nombre_productor','$nombre_creador','$historia_archivistica','$forma_ingreso','$descripcion','$tipo_soporte','$descripcion_soporte','$accesibilidad','$condiciones_accesibilidad','$descripcion_estado','$intervenciones','$recomendaciones','$documentos_relacionados','$notas','$fecha_registro','$resp_registro','$resp_control')";

echo $insertar;
mysqli_query($conexion,$insertar) or exit ("no guardar");
echo "consulta envianda";

?>