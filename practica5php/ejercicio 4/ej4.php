<?php
session_start();
?>
<html>
<body>
<a href="nuevapagina.php"></a>
<?php
if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
   }else{
    $_SESSION["contador"]++;
   } 
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br>
<br>
<a href="nuevapagina.php">Otra página</a>
</body>
</html>