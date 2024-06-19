<?php
//Aqui pon tu usuario, contraseña y servidor de la base de datos
session_start();

$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "base2";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Consulta SQL para buscar el nombre correspondiente al correo proporcionado
    $sql = "SELECT nombre FROM alumnos WHERE mail = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['nombre'] = $row['nombre'];
        header("Location: bienvenida.php");
    } else {
        echo "El correo electrónico no se encuentra en la base de datos.";
    }
}

$conn->close();
?>