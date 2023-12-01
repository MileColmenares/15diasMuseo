<!DOCTYPE html>
<html>
<head>
    <title>Eliminar datos</title>
    <link rel="icon" href="logo.png" type="logo.png"> <!--logo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!--estilo de la pagina-->
    <style>
        html,
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
            width: 80%;
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
            color: #353535;
        }

        button[type="button"]:hover {
            background-color: #fdf16f;
            color: #353535;
        }

        .botones {
            text-align: right;
            margin-top: 20px;
        }

        .botones button {
            margin-right: 150px;
        }
    </style>
</head>
<body>

    <br>
    <h1 class="text-center">Eliminar datos de la Serie</h1>

    <!--formulario para eliminar datos-->
    <div class="container mt-5 custom-form">
        <form action="deleteSerie.php" method="get">
            
            <div class="form-group">
                <label class="custom-label text-center" for="nombre_serie">Nombre del Registro a Eliminar:</label>
                <input class="custom-input" type="text" name="nombre_serie" required><br><br>
            <button type="submit" class="btn btn-custom" value="Eliminar">Eliminar</button>
        </form>
    </div>

    
</body>
</html>
