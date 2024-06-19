<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    // Obtener el nombre de usuario y la clave del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Crear variables de sesión para almacenar el nombre de usuario y la clave
    $_SESSION['nombre_usuario'] = $usuario;
    $_SESSION['clave'] = $clave;

    // Redirigir a la página para recuperar las variables de sesión
    header("Location: pagina3.php");
} else {
    echo "Debes completar el formulario de ingreso.";
}
?>
