<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Añadir el ID del producto al carrito (esto podría almacenarse en una tabla o en una variable de sesión)
    $_SESSION['carrito'][] = $id;

    echo "Producto agregado al carrito.";
}
?>