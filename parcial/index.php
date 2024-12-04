<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro Gaming</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>
<div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <div class="input-group"> 

                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label> 

                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <div 
 class="options">
            <a href="recuperar.html">Olvidé mi contraseña</a>
            <a href="registro.html">Registrarse</a>
        </div>
    </div>
</body>
</html>