<?php
include("consultaRegistrarfondo.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Fondo</title>
    <link rel="stylesheet" type="text/css" href="registrarFondo.css">
    <link rel="icon" href="logo.jpg" type="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<header>
        <div class="logo">
            <img src="logo_muni.jpg" alt="">
        </div>
        <nav>
            <ul>
            <li><a href="index.php"><img src="cerrar_sesion.png"></a></li>

            </ul>
        </nav>
    </header>
    <br>
    <h1 class="text-center">Ingrese un fondo</h1>

    <div class="container mt-5 custom-form">
        <form action="consultaRegistrarfondo.php" method="post">
            <div class="form-group">
                <label class="custom-label text-center" for="codigo">Codigo:</label>
                <input class="custom-input" type="text" id="codigo" name="codigo" required><br><br>
            </div>
            <div class="form-group">
                <label class="custom-label text-center" for="nombre_fondo">Nombre:</label>
                <input class="custom-input" type="text" id="nombre_fondo" name="nombre_fondo" required><br><br>
            </div>
            <button type="submit" class="btn btn-danger">Guardar</button>
        </form>
    </div>
    <footer>
        <div class="content-wrapper">
        <h4>SEGUINOS EN</h4>
        <div class="footer-images">
            <a href="https://www.instagram.com/municipalidad.montecristo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><img src="ig_rojo.png" alt="Instagram"></a>
            <a href="https://www.facebook.com/MunicipalidaddeMonteCristo"><img src="face_rojo.png" alt="Facebook"></a>
        </div>

        <h5>Luis Tagle 295, Monte Cristo, Cordoba Argentina</h5>
        <h5>&copy;Municipalidad de Monte Cristo</h5>
    </footer>
</body>
</html>
