<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Nombre de Usuario</title>
</head>
<body>
    <h1>Formulario de Nombre de Usuario</h1>

    <?php
    // Verifica si se ha enviado el formulario
    if (isset($_POST['username'])) {
        // Obtene el nombre de usuario ingresado
        $username = $_POST['username'];
        
        // Crea una cookie llamada "ultimo_usuario" con el nombre de usuario
        setcookie('ultimo_usuario', $username, time() + 86400);
    }
    ?>

    <?php
    // Verifica si la cookie "ultimo_usuario" existe
    if (isset($_COOKIE['ultimo_usuario'])) {
        $ultimoUsuario = $_COOKIE['ultimo_usuario'];
        echo "<p>Último nombre de usuario ingresado: $ultimoUsuario</p>";
    }
    ?>

    <form method="post">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Guardar Nombre de Usuario</button>
    </form>
</body>
</html>