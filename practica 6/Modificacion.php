<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de datos</title>
    <style>
        .error{
            text-align: center;
            color:red;
            font-size: 24px;
            margin-top:5%;
        }
        .exitoso{
            text-align: center;
            color:#36a64f;
            font-size: 24px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$habitantes = $_POST["habitantes"];
$superficie = $_POST["superficie"];
$tienemetro = $_POST["tienemetro"];


require("conexion-ej2.php");
// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}


// Si llegamos aquí, la conexión fue exitosa.
// Puedes realizar operaciones con la base de datos en este archivo o en otros archivos que incluyan este.
$query = "UPDATE `ciudades` SET `ciudad`='$ciudad',`pais`='$pais',`habitantes`='$habitantes',`superficie`='$superficie',`tienemetro`='$tienemetro' WHERE ciudad = '$ciudad'";
$resultados = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn)==0){
    echo "<p class='error'> HA HABIDO UN ERROR EN LA ACTUALIZACION DE DATOS O NO SE HAN ACTUALIZADO DATOS</p>";
}
else{
    echo "<p class='exitoso'>DATOS ACTUALIZADOS DE FORMA EXITOSA</p>";
}
$consulta_actualizada = "SELECT * FROM ciudades WHERE ciudad = '$ciudad'";
            $resultados_actualizados = mysqli_query($conn, $consulta_actualizada);
            ?>
            <h2>Registro Actualizado</h2>
            <table>
                <tr>
                    <th>CIUDAD</th>
                    <th>PAIS</th>
                    <th>HABITANTES</th>
                    <th>SUPERFICIE</th>
                    <th>TIENE METRO</th>
                </tr>
                <?php
                // Mostrar los datos actualizados en la tabla
                while ($fila = mysqli_fetch_assoc($resultados_actualizados)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ciudad'] . "</td>";
                    echo "<td>" . $fila['pais'] . "</td>";
                    echo "<td>" . $fila['superficie'] . "</td>";
                    echo "<td>" . $fila['habitantes'] . "</td>";
                    echo "<td>" . $fila['tienemetro'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <?php
?>   
</body>
</html>