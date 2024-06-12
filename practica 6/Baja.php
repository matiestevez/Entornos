<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            text-align: center;
            color:red;
            font-size: 24px;
        }
        .exitoso{
            text-align: center;
            color:#36a64f;
            font-size: 24px;
        }
    </style>
</head>
<body>
<?php
$campo = $_POST["opcion"];
$referencia = $_POST["referencia"];

require("conexion-ej2.php");
// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Realizar la eliminación en la base de datos
$query = "DELETE FROM `ciudades` WHERE $campo = '$referencia'";
$resultados = mysqli_query($conn, $query);

if ($resultados && mysqli_affected_rows($conn) > 0) {
    // La eliminación fue exitosa, muestra un mensaje de confirmación al usuario
    echo "<p class='exitoso'>El registro fue eliminado correctamente.</p>";
} else {
    // Hubo un problema con la eliminación, muestra un mensaje de error al usuario
    echo "<p class='error'>Ocurrió un error al eliminar el registro.</p>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

</body>
</html>