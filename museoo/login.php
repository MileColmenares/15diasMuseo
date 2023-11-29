<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="logo.jpg" type="logo.jpg"> <!--logo de la pagina-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!--formulario de inicio de sesion-->
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="validar.php" method="POST">
            <label for="nombre_usuario">Usuario:</label>
            <input type="text" name="nombre_usuario" required><br><!--ingresar usuario-->
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" required><br><!--ingresar contraseña-->
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>