<?php
// Verifica si la cookie "contador" existe
if (isset($_COOKIE['contador'])) {
    
    $contador = $_COOKIE['contador'] + 1;
} else {
    // Si no existe, establece el contador a 1 y crea la cookie
    $contador = 1;
}
// Establece la cookie "contador" con el nuevo valor 
setcookie('contador', $contador);


if ($contador === 1) {
    echo "¡Bienvenido a esta página!";
} else {
    echo "Has visitado esta página $contador veces.";
}
?>