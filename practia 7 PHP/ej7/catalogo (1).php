<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Productos</title>
</head>
<body>
    <h1>Catálogo de Productos</h1>
    <ul>
        <?php

        //Aqui pon tu usuario, contraseña y servidor de la base de datos
        $servername = "tu_servidor";
        $username = "tu_usuario";
        $password = "tu_contraseña";
        $database = "Compras";

        // Conexión a la base de datos
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        $sql = "SELECT id, producto, precio FROM catalogo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['producto']} - Precio: \${$row['precio']} <a href='agregar_carrito.php?id={$row['id']}'>Agregar al carrito</a></li>";
            }
        } else {
            echo "No hay productos disponibles en el catálogo.";
        }

        $conn->close();
        ?>
    </ul>
</body>
</html>
