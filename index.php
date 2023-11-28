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
            background: linear-gradient(45deg, #289e92, #c22a2c);
            background-repeat: no-repeat;
            height: 100vh
        }
        h1{
            color: antiquewhite;
            font-style: oblique;
        }
        .btn-custom{
            background-color: #c22a2c;
            color: antiquewhite;
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