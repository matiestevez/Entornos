<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Búsqueda</title>
</head>
<body>
    <h1>Resultado de la Búsqueda</h1>

    <?php

    //Aqui pon tu usuario, contraseña y servidor de la base de datos    
    $servername = "tu_servidor";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $database = "prueba";

    $cancion_buscada = $_POST['cancion'];

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta SQL para buscar canciones que coincidan con la búsqueda
    $sql = "SELECT canciones FROM buscador WHERE canciones LIKE '%$cancion_buscada%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['canciones']}</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron resultados para '$cancion_buscada'.";
    }

    $conn->close();
    ?>
</body>
</html>
