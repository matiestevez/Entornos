<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="felipesosabianciotto@gmail.com"; /"micorreo@dominio.com";/
$asunto="Comentario";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .='From:' .$_POST['email'];
$comentario= "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[texto]\n
Enviado: $fecha a las $hora\n
\n
";
if (mail($para, $asunto, $mensaje, $headers)) {
    echo 'El correo electrónico se ha enviado correctamente.';
} else {
    echo 'Hubo un problema al enviar el correo electrónico.';
}
?>
?>