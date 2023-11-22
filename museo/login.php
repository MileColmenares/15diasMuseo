<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital Privado</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" href="logo.jpg" type="logo.jpg">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="validar.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required><br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>