<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <ul>
        <?php
        if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
            //AAqui pon tu usuario, contraseña y servidor de la base de datos
            $servername = "tu_servidor";
            $username = "tu_usuario";
            $password = "tu_contraseña";
            $database = "Compras";

            // Conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            $productos_en_carrito = $_SESSION['carrito'];
            $total = 0;

            echo "<ul>";
            foreach ($productos_en_carrito as $id) {
                $sql = "SELECT producto, precio FROM catalogo WHERE id = $id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<li>{$row['producto']} - Precio: \${$row['precio']}</li>";
                    $total += $row['precio'];
                }
            }
            echo "</ul>";

            echo "<p>Total: \$$total</p>";

            $conn->close();
        } else {
            echo "El carrito de compras está vacío.";
        }
        ?>
    </ul>
</body>
</html>