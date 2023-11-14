<!DOCTYPE html>
<html>
<head>
    <title>Ingresar subfondo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(45deg, #a3b48c, #DBCEBD);
            background-repeat: no-repeat;
            height: max
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
            background-color: #a3b48c;
            color:white;    
        }

        button[type="button"]:hover {
            background-color: #a3b48c;
            color:white;    
        }

        .botones{
            text-align: right;
            margin-top: 20px;
        }

        .botones button {
            margin-right: 150px;
        }
    </style>
</head>
<body>
    <?php
    //include("cabecera.php");
    ?>
    <br>
    <h1 class="text-center">Ingrese un nuevo subfondo</h1>

    <!--formulario para registrar datos-->
    <div class="container mt-5 custom-form">
        <form action="consultaRegistrarSubfondo.php" method="post">
            <div class="form-group">
                <label class="custom-label text-center" for="nombre_subfondo">Nombre:</label>
                <input class="custom-input" type="text" id="nombre_subfondo" name="nombre_subfondo" required><br><br>
            </div>
            <button type="submit" class="btn btn-custom">Guardar</button>
        </form>
    </div>

    <?php
    include("conexion.php");

    $sql = "SELECT * FROM subfondo";
    $result = $datos_bd->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='custom-table'>
        <tr>
            <th>Subfondos existentes</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nombre_subfondo"] . "</td>
                  </tr>";
        }
        echo "</table>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($datos_bd);
    ?>

    <!-- Botón Modificar debajo de la tabla -->
    <div class="botones">
        <a href="modificarDatosSubfondo.php">
            <button type="button" class="btn btn-custom">Modificar</button>
        </a>
    </div>
</body>
</html>
