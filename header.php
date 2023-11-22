<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="icon" href="logo.jpg" type="logo.jpg">
    <script src="https://code.jquery.com/query-3.6.0.min.js"></script>
    <title>Cabecera</title>
</head>
<body>

<header>
    <div class="logo">
        <a href="index.php">
        <button type="submit" class="btn btn-custom" onclick="volver()"><</button>
        </a>

    <script>
        function volver() {
            window.history.back();
        }
    </script>
    
        <img src="img/logo_muni.jpg" alt="">
    </div>
        <nav>
            <ul>
            <li><a href="cerrarSesion.php"><img src="img/logout.png"></a></li>
            </ul>
        </nav>
</header>


</body>
</html>