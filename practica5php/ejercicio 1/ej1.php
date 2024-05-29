<?php
$texto = $_POST["comentarios"];
$destinatario = $_POST["email"];
$asunto = $_POST["asunto"];
$headers = "MIME-version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From Matias <matiestevez2004@gmail.com>\r\n";

$exito = mail($destinatario,$asunto,$texto,$headers);
if($exito){
    echo "Mail enviado";
}