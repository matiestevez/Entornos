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
            margin-top:5%;
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
require("conexion-ej2.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Fallo de conexion: " . mysqli_connect_error());
}


$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tienemetro'];

$query = "INSERT INTO `ciudades` (`ciudad`, `pais`, `habitantes`, `superficie`, `tienemetro`) VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$tieneMetro')";

$consulta = mysqli_query($conn, $query) or die (mysqli_error($conn));

if($consulta == False){
    echo "<p class='error'> HA HABIDO UN ERROR EN LA CARGA DE DATOS</p>";
}
else{
    echo "<p class='exitoso'>DATOS CARGADOS DE FORMA EXITOSA</p>";
}


mysqli_close($conn);
header("Location: ./Alta.html");
?>
</body>
</html>