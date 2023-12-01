<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.jpg" type="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Página principal</title>
    <style>
        body{
            background: linear-gradient(45deg, #5a783c, #a3b48c, #DBCEBD,#f1eae1);
            background-repeat: no-repeat;
            height: 100vh
        }
        h1{
            color: #228051;
            font-style: oblique;
        }
        .btn-custom{
            background-color:#228051;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    </style>
</head>

<body>
<?php
//incluye la cabecera
include("header.php");
?>
    <br>
<!--titulo-->
    <h1 class="text-center">¡Bienvenido administrador!</h1>
    <br>
<!--menu-->
    <div class="row justify-content-center">
    <div class="card w-50 text-center">
        <div class="card-body">
          <br>
          <h5 class="card-title">Elija la operación que desea realizar</h5>
          <br>
          <div class="mb-2">
            <a href="mostrar.php">
            <button type="button" class="btn btn-custom">Buscar archivo</button>
            </a>
          </div>
  
          <div class="mb-2">
            <a href="menuIngresar.php">
            <button type="button" class="btn btn-custom">Ingresar datos</button>
            </a>
            <br>
        </div>
    </div>
    </div>
</body>
</html>
<?php
include("footer.php");
?>