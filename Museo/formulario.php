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
            <label>volumen de soporte</label>
            <input type="text" name="volumen_soporte" placeholder="volumen de soporte"required>
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
            <label>condicion de reproduccion</label>
            <input type="text" name="condicion_reproduccion" placeholder="condicion de reproduccion"required>
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
