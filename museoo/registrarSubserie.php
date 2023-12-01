<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Subserie</title>
    <link rel="icon" href="logo.png" type="logo.png"> <!--logo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!--estilo de la pagina-->
    <style>
        html,
        body{
            background: linear-gradient(45deg, #a1b489, #dbcdbc);
            background-repeat: repeat;
            height: 100%;
            margin: 0;    
        }
        h1{
            color: #006400;
            font-style: oblique;
        }
        .btn-custom{
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

        .custom-table th, .custom-table td {
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
            color:#353535;
        }

        .botones{
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
    <h1 class="text-center">Ingrese una nueva Subserie</h1>

    <!--formulario para registrar datos-->
    <div class="container mt-5 custom-form">
        <form action="consultaRegistrarSubserie.php" method="post">

            <div class="form-group">
                <label class="custom-label text-center" for="nombre_subserie">Nombre:</label>
                <input class="custom-input" type="text" id="nombre_subserie" name="nombre_subserie" required><br><br>
                <label for="nombre_serie" class="custom-label text-center">A qué serie pertenece:</label>
                <select id="nombre_serie" name="nombre_serie" required>

                <?php
                //trae las series desde la base
                include("conexion.php");
                $sql = "SELECT * FROM serie";
                $result = $datos_bd->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id_serie"] . '">' . $row["nombre_serie"] . '</option>';    
                    }
                } else {
                    echo '<option value="">No hay subseries registradas</option>';
                }
                ?>

                </select><br><br>

            </div>
            <button type="submit" class="btn btn-custom">Guardar</button>
        </form>
    </div>
    <br><br>

    <!--Muestra la serie,subserie y subfondo en una tabla -->
    <?php
    include("conexion.php");

    $sql = "SELECT * from subfondo sf,serie s,subserie sb where sf.id_subfondo=s.id_subfondo AND sb.id_serie=s.id_serie";
    $result = $datos_bd->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='custom-table'>
        <tr>
            <th>Subseries existentes</th>
            <th>Serie perteneciente</th>
            <th>Subfondo perteneciente</th>
            
        </tr>";
    }
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nombre_subserie"] . "</td>
                <td>" . $row["nombre_serie"] . "</td>
                <td>" . $row["nombre_subfondo"] . "</td>
                </tr>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($datos_bd);
    ?>
    </table>
    <br></br>
    </div>
    <div class="botones">
        <!--boton de modificar datos -->
        <a href="modificarDatosSubserie.php">
            <button type="button" class="btn btn-custom">Modificar</button>
        </a>

        <!--boton de eliminar datos -->
        <a href="eliminarSubserie.php">
            <button type="button" class="btn btn-custom">Eliminar</button>
        </a>
    </div>

    <!--Footer de la pagina-->
    <?php
    include("footer.php");
    ?>
</body>
</html>
