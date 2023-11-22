<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Datos</title>
</head>
<body>
    <h2>Modificar Datos</h2>
    <form action="actualizar_datos.php" method="post">
        <label for="id_subfondo">ID del Registro a Modificar:</label>
        <input type="text" name="id_subfondo" required>
        <br>
        <label for="nuevo_valor">Nuevo Valor:</label>
        <input type="text" name="nuevo_valor" required>
        <br>
        <input type="submit" class="btn btn-custom" value="Actualizar">
    </form>
</body>
</html>
