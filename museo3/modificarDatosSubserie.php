<!DOCTYPE html>
<html>
<head>
    <title>Modificar datos</title>
    <link rel="icon" href="logo.jpg" type="logo.jpg"> <!--logo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!--estilo de la pagina-->
    <style>
        html,
        body{
            background: linear-gradient(45deg, #a3b48c, #DBCEBD);
            background-repeat: no-repeat;
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
            width: 80%;
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

    <br>
    <h1 class="text-center">Modificar datos de la subserie</h1>

    <!--formulario para modificar datos-->
    <div class="container mt-5 custom-form">
        <form action="actualizarDatosSubserie.php" method="post">
            
            <div class="form-group">
                <label class="custom-label text-center" for="nombre_subserie">Registro a modificar:</label>
                <input class="custom-input" type="text" id="nombre_subserie" name="nombre_subserie" placeholder="   Nombre de la subserie" required><br><br>
                <label class="custom-label text-center">Nuevo Valor:</label>
                <input class="custom-input" type="text" name="nuevo_valor" placeholder="   Nuevo nombre de la subserie" required>

                </select><br><br>

            </div>
            <button type="submit" class="btn btn-custom" value="Actualizar">Actualizar</button>
        </form>
    </div>
    <br><br>

    
</body>
</html>
