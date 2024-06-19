<?php
if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    seetcookie("estilo", $estilo, time()+3600);
}else{
    if(isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
    }
}
if(iseet($estilo)){
    echo "<link rel='stylesheet' href='estilos/$estilo.css'>";
}
?>