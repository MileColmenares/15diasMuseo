<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingresar datos</title>
    <link rel="stylesheet" type="text/css" href="css/datos.css">
    <link rel="icon" href="logo.png" type="logo.png"> <!--logo de la pagina-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!--Header de la pagina-->
    <?php
    include("header.php");
    ?>
    <!--caja para elegir que dato ingresar-->
    <div class="login-container">
        <h1>¿Que datos desea ingresar?</h1>
        <!--<div class="button">-->
            <a href="registrarSubfondo.php" type="button">Ingresar Subfondo</a>
            <a href="registrarSerie.php" type="button">Ingresar Serie</a>
            <a href="registrarSubserie.php" type="button">Ingresar Subserie</a>
            <a href="unidadDocumental.php" type="button">Ingresar unidad documental</a>        
    </div>

    <!--Footer de la pagina-->
    <?php
    include("footer.php");
    ?>
</body>
</html>
