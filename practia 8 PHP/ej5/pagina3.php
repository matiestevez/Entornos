<?php
session_start();

if (isset($_SESSION['nombre_usuario']) && isset($_SESSION['clave'])) {
    $usuario = $_SESSION['nombre_usuario'];
    $clave = $_SESSION['clave'];

    echo "Nombre de usuario almacenado en la variable de sesión: $usuario<br>";
    echo "Clave almacenada en la variable de sesión: $clave";
} else {
    echo "No se encontraron variables de sesión almacenadas.";
}
?>
