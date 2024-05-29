<?php
session_start();
?>
<html>
<body>
<?php
if (!isset($_SESSION["contador"])){
 $_SESSION["contador"] = 1;
}else{
 $_SESSION["contador"]++;
}
 echo "Has visitado " . ($_SESSION["contador"]) . " páginas"
 ?>
<br>
<br>
<a href= "ej4.php">Otra pagina</a>
</body>
</html>