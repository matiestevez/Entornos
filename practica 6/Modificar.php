<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos para la tabla */
        h1{
            text-align: center;
        }
        form {
            border-collapse: collapse;
            width: 80%;
            margin: auto; /* Centrar la tabla horizontalmente */
            text-align: center;
        }

        input {
            border: 1px solid black;
            padding: 8px;
            display:grid;
            margin:auto;
        }

        th {
            background-color: #f2f2f2;
        }
        .mensaje{
            color:red;
            text-align: center;
            font-size: 25px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
<body>
<?php

$campo_act = $_POST["campo_act"];
$referencia = $_POST["referencia"];
 
require("conexion-ej2.php");
// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Si llegamos aquí, la conexión fue exitosa.
// Puedes realizar operaciones con la base de datos en este archivo o en otros archivos que incluyan este.
$query = "SELECT * FROM ciudades WHERE $campo_act = '$referencia'";

$resultados = mysqli_query($conn, $query);
if (mysqli_num_rows($resultados) > 0) {
    $filas = array();
    echo "<h1>Tabla de Ciudades</h1>";
    echo "<form action='Modificacion.php' method='post'>";
    // Bucle while para obtener todos los datos de la base de datos y agregarlos al arreglo de filas
    while ($row = mysqli_fetch_array($resultados , MYSQLI_ASSOC) ) {
        $filas[] = $row;
        echo "<input type='text' name='ciudad' value='". $row["ciudad"]."'>";
        // Aquí puedes agregar más campos del formulario para actualizar los datos
        echo "<input type='text' name='pais' value='". $row["pais"]."'>";
        echo "<input type='text' name='habitantes' value='". $row["habitantes"]."'>";
        echo "<input type='text' name='superficie' value='". $row["superficie"]."'>";
        echo "<input type='text' name='tienemetro' value='". $row["tienemetro"]."'>";
    }
    // Cerrar el formulario
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";
} else {
    echo "No se encontraron registros con los criterios de búsqueda.";
}

// No olvides cerrar la conexión cuando hayas terminado de utilizarla.
mysqli_close($conn);
?>

</body>
</html>