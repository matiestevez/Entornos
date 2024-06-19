<?php
if (isset($_POST['titular'])) {
    $titular = $_POST['titular'];
    
    // Crea una cookie llamada "tipo_titular" con el valor seleccionado
    setcookie('tipo_titular', $titular, time() + 86400); // Duración de 24 horas
}
header("Location: ej4.php");
?>