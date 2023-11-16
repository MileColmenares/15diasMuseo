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
            <label>fondo</label>
            <select id="fondo" name="fondo" required>
            <?php
                include("conexion.php");
                $sql = "SELECT * FROM fondo";
                $result = $datos_bd->query($sql);

                 if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id_fondo"] . '">' . $row["nombre_fondo"] . '</option>';    
                        }
                    } else {
                            echo '<option value="">No hay subfondos registrados</option>';
                    }
            ?>
            </select>
            </div>
            <div>
            <label>subfondo</label>
            <select id="subfondo" name="subfondo" required>
            <?php
                include("conexion.php");
                $sql = "SELECT * FROM subfondo";
                $result = $datos_bd->query($sql);

                 if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id_subfondo"] . '">' . $row["nombre_subfondo"] . '</option>';    
                        }
                    } else {
                            echo '<option value="">No hay subfondos registrados</option>';
                    }
            ?>
            </select>
            </div>
        <div>
            <label>serie</label>
            <select id="serie" name="serie" required>
            <?php
                include("conexion.php");
                $sql = "SELECT * FROM serie";
                $result = $datos_bd->query($sql);

                 if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id_serie"] . '">' . $row["nombre_serie"] . '</option>';    
                        }
                    } else {
                            echo '<option value="">No hay subfondos registrados</option>';
                    }
            ?>
            </select>
            </div>
            <div>
            <label>subserie</label>
            <select id="subserie" name="subserie" required>
            <?php
                include("conexion.php");
                $sql = "SELECT * FROM subserie";
                $result = $datos_bd->query($sql);

                 if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id_subserie"] . '">' . $row["nombre_subserie"] . '</option>';    
                        }
                    } else {
                            echo '<option value="">No hay subfondos registrados</option>';
                    }
            ?>
            </select>
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
            <label>ubicación</label>
            <input type="text" name="ubicacion" placeholder="ubicacion"required> 
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
            <label>forma de ingreso</label>
            <input type="text" name="forma_ingreso" placeholder="forma ingreso"required>
            </div>         
        <div>
            <label>descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion"required>
            </div>
        <div>
            <label for="nombre"> estado de conservacion:</label>
            <select id="estado_conservacion" name="estado_conservacion">
                <option value="muy bueno ">muy bueno </option>
                <option value="bueno">bueno</option>
                <option value="regular">regular</option>
                <option value="malo">malo</option>

            </select>
        </div> 
        <div>
            <label>condicion de acceso</label>
            <input type="text" name="condicion_acceso" placeholder="condicion de acceso"required>
            </div>         
        <div>
            <label>condicion de reproduccion</label>
            <input type="text" name="condicion_reproduccion" placeholder="condicion de reproduccion"required>
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
