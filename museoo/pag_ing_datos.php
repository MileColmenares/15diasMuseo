<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingresar datos</title>
    <link rel="stylesheet" type="text/css" href="css/datos.css">
    <link rel="icon" href="logo.png" type="logo.png"> <!--logo de la pagina-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color:#ffffff; 
        /*background: linear-gradient(45deg, #5a783c, #a3b48c, #DBCEBD, #f1eae1);*/
        display: flex;
        align-items: center;
        border-radius: 50px;
        height: 100px;
        margin-bottom: 180px; /* Añadir espacio entre el header y el contenido */
    }

    .logo {
        flex: 1;
        height: 170%;
        display: flex;
        align-items: center;
    }

    .logo img {
        max-height: 90%;
        width: 22%;
    }

    nav ul {
        list-style: none;
        padding: 0;
        text-align: center;
    }

    nav ul li {
        display: inline;
        margin: 0 20px;
    }

    nav ul li a {
        text-decoration: none;
        color: #3498db;
        font-size: 16px;
    }

    footer {
        background-color:#ffffff; 
        color: #3d3d3d;
        text-align: center;
        padding: 1px 0;
        /*background: linear-gradient(45deg, #5a783c, #a3b48c, #DBCEBD, #f1eae1);*/
        border-radius: 50px;
        margin-bottom: 50px;
        margin-top: 180px; /* Añadir espacio entre el contenido y el footer */
    }

    .footer-images {
        display: flex;
        justify-content: center;
        align-items: center; 
    }

    .footer-images img {
        width: 50px; 
        height: 50px; 
        margin: 0 10px; 
    }

    h6 { 
        font-weight: normal;
    }
    </style>
</head>
<body>

    <!--Header de la pagina-->
    <header>
        <div class="logo">
            <img src="img/logoarch.png" alt="">
        </div>
        <nav>

        <!-- boton para cerrar sesion-->
            <ul>
            <li><a href="login.php"><img src="img/cerrar.png"width=20px height=20px></a></li>
            </ul>
        </nav>
    </header>
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
    <footer>
        <p>SEGUINOS EN</p>
        <div class="footer-images">
            <a href="https://www.instagram.com/municipalidad.montecristo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><img src="img/instagram.png" alt="Instagram"></a>
            <a href="https://www.facebook.com/MunicipalidaddeMonteCristo"><img src="img/facebook.png" alt="Facebook"></a>
        </div>

        <p>&copy; Municipalidad de Monte Cristo </p>
        <p>Luis Tagle 295, Monte Cristo, Cordoba Argentina</p>
        <h6>&copy;Derechos resevados a Colmenares Milena, Miras Santiago, Rossi Fabricio y Salvatierra Franco.</h6>
    </footer>
</body>
</html>
