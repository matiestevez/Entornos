<?php
// Borra la cookie "tipo_titular" al hacer clic en el enlace
setcookie('tipo_titular', '', time() - 3600); // Establece una fecha de expiración en el pasado
header("Location: ej4.php");
?>