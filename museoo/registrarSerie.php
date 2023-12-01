<!DOCTYPE html>
<html>

<head>
    <title>Ingresar serie</title>
    <link rel="icon" href="logo.png" type="logo.png"> <!--logo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            height: 100%;
            margin: 0;
            background: linear-gradient(45deg, #a1b489, #dbcdbc);
            background-repeat: no-repeat;
        }

        h1 {
            color: #006400;
            font-style: oblique;
        }

        .btn-custom {
            background-color: #198754;
            color: #e9ecef;
            border: 2px solid #006400;
        }

        .custom-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .custom-label {
            color: #006400;
            font-weight: bold;
        }

        .custom-input {
            width: 90%;
        }

        .custom-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border: 1px solid #006400;
        }

        .custom-table th,
        .custom-table td {
            padding: 10px;
            border: 2px solid #006400;
            text-align: center;
            color: black;
            font-style: oblique;
        }

        button[type="submit"]:hover {
            background-color: #fdf16f;
            color:#353535;
        }

        button[type="button"]:hover {
            background-color: #fdf16f;
            color: #353535;
        }

        .botones {
            text-align: right;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .botones button {
            margin-right: 50px;
        }
    </style>
</head>

<body>

    <!--Header de la pagina-->
    <?php
    include("header.php");
    ?>
    
    <br>
    <h1 class="text-center">Ingrese una nueva serie</h1>

    <!--formulario para registrar datos-->
    <div class="container mt-5 custom-form">
        <form action="consultaRegistrarSerie.php" method="post">

            <div class="form-group">
                <label class="custom-label text-center" for="nombre_serie">Nombre:</label>
                <input class="custom-input" type="text" id="nombre_serie" name="nombre_serie" required><br><br>
                <label for="nombre_subserie" class="custom-label text-center">Subserie:</label>
                <select name="nombre_subserie" required><br></br>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                <br></br>
                <label for="nombre_subfondo" class="custom-label text-center">Subfondo:</label>
                <select id="nombre_subfondo" name="nombre_subfondo" required>

                    <?php
                    //trae los subfondos desde la base
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
                </select><br><br>


            </div>
            <button type="submit" class="btn btn-custom">Guardar</button>
        </form>
    </div>
    
    <!--Muestra la serie,subserie y subfondo en una tabla -->
    <?php
    include("conexion.php");

    $sql = "SELECT * FROM serie s,subfondo sf WHERE s.id_subfondo=sf.id_subfondo";
    $result = $datos_bd->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='custom-table'>
        <tr>
            <th>Series existentes</th>
            <th>Subserie</th>
            <th>Subfondo</th>
        </tr>";
    }
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nombre_serie"] . "</td> 
                <td>" . $row["nombre_subserie"] . "</td>
                <td>" . $row["nombre_subfondo"] . "</td>
                </tr>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($datos_bd);
    ?>
    </table>
    <br></br>

    <div class="botones">
        <!--boton de modificar datos -->
        <a href="modificarDatosSerie.php">
            <button type="button" class="btn btn-custom">Modificar</button>
        </a>

        <!--boton de eliminar datos -->
        <a href="eliminarSerie.php">
            <button type="button" class="btn btn-custom">Eliminar</button>
        </a>
    </div>

    <!--Footer de la pagina-->
    <?php
    include("footer.php");
    ?>
</body>
</html>
