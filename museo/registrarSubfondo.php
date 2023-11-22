<!DOCTYPE html>
<html>
<head>
    <title>Ingresar subfondo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(45deg, #289e92, #c22a2c);
            background-repeat: no-repeat;
            height: max
        }
        h1{
            color: antiquewhite;
            font-style: oblique;
        }
        .btn-custom{
            background-color: #c22a2c;
            color: antiquewhite;
        }

        .custom-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .custom-label {
            color: #c22a2c;
            font-weight: bold;
        }

        .custom-input {
            width: 90%;
        }

.custom-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            border: 1px solid #c22a2c;
        }

        .custom-table th, .custom-table td {
            padding: 10px;
            border: 2px solid #c22a2c;
            text-align: center;
            color: antiquewhite;
            font-style: oblique;
        }
    </style>
</head>
<body>

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
        <a href="modificar.php">
            <button type="button" class="btn btn-custom">Modificar</button>
        </a>
        <a href="mostrarDatos.php">
            <button type="button" class="btn btn-custom">Eliminar</button>
        </a>
        
    </form>
</div>

<?php
    include("consultaRegistrarSubfondo.php");

    $sql = "SELECT * FROM subfondo";
    $result = $datos_bd->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='custom-table'>
        <tr>
            <th>Subfondos existentes</th>
        </tr>";
    }
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nombre_subfondo"] . "</td>
                </tr>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($datos_bd);
?>
</body>
</html>