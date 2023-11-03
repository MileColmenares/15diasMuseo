<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <title>Museo</title>
</head>
<body>
    
    <form  action="insertarDatos.php" method="POST">
        <div>
            <label>nobre del documento</label>
            <input type="text" name="nombre_documento" placeholder="nombre del documento"required>
            </div>
        <div>
            <label>fecha de inicio </label>
            <input type="date" name="fecha_inicio" placeholder="fecha de inicio"required>      
            </div>
        <div>
            <label>fecha de final</label>
            <input type="date" name="fecha_final" placeholder="fecha de final"required>
            </div>
        <div>
            <label>numero de folios</label>
            <input type="tel" name="n_folios" placeholder="numeros de folios"required>
            </div>
        <div>
            <label>cantidad de elementos</label>
            <input type="text" name="cant_elementos" placeholder="cantidad de elementos"required>
            </div>
        <div>
            <label>medidas</label>
            <input type="text" name="medidas" placeholder="medidas"required>
            </div>
        <div>
            <label>nombre del productor</label>
            <input type="text" name="nombre_productor" placeholder="nombre del productor"required>
            </div>
        <div>
            <label>nombre del creador</label>
            <input type="text" name="nombre_creador" placeholder="nombre del creador"required>
            </div>
        <div>
            <label>historia archivistica</label>
            <input type="text" name="historia_archivistica" placeholder="historia archivistica"required>
            </div> 
        <div>
            <label>forma de ingreso</label>
            <input type="text" name="forma_ingreso" placeholder="forma ingreso"required>
            </div>         
        <div>
            <label>descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion"required>
            </div>         
        <div>
            <label>tipo de soporte</label>
            <input type="text" name="tipo_soporte" placeholder="tipo de soporte"required>
            </div>         
        <div>
            <label>descripcion de soporte</label>
            <input type="text" name="descripcion_soporte" placeholder="descripcion de soporte"required>
            </div>         
        <div>
            <label>accesibilidad</label>
           <!-- <input type="text" name="accesibilidad" placeholder="accesibilidad"required> -->
            <select type="text" name="accesibilidad">
                <option value="Público">Público</option>
                <option value="Restringido">Restringido</option>
                <!-- Agrega más opciones aquí -->
            </select>
            </div>
        <div>
            <label>condiciones de accesibilidad</label>
            <input type="text" name="condiciones_accesibilidad" placeholder="condiciones de accesibilidad"required>
            </div> 
        <div>
            <label>descripcion de estado</label>
            <input type="text" name="descripcion_estado" placeholder="descripcion de estado"required>
            </div> 
        <div>
            <label>intervenciones</label>
            <input type="text" name="intervenciones" placeholder="intervenciones"required>
            </div>
        <div>
            <label>recomendaciones</label>
            <input type="text" name="recomendaciones" placeholder="recomendaciones"required>
            </div> 
        <div>
            <label>documentos relacionados</label>
            <input type="text" name="documentos_relacionados" placeholder="documentos relacionados"required>
            </div> 
        <div>
            <label>notas</label>
            <input type="text" name="notas" placeholder="notas"required>
            </div> 
        <div>
            <label>fecha de registro</label>
            <input type="date" name="fecha_registro" placeholder="fecha de registro"required>
            </div>
        <div>
            <label>respuesta de registro</label>
            <input type="text" name="resp_registro" placeholder="respuesta de registro"required>
            </div>
        <div>
            <label>respuestra de control</label>
            <input type="text" name="resp_control" placeholder="respuesta de control"required>
            </div>        
        <div>
            <button type="submit"data-bs-toggle="modal"data-bs-target="#staticBackdrop">Enviar</<button>
            </div>

    </form>
</body>
</html>
