<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tuNombre = $_POST['tuNombre'];
        $tuEmail = $_POST['tuEmail'];
        $nombreAmigo = $_POST['nombreAmigo'];
        $emailAmigo = $_POST['emailAmigo'];
        $mensaje = $_POST['mensaje'];


        if (empty($tuNombre) || empty($tuEmail) || empty($nombreAmigo) || empty($emailAmigo) || empty($mensaje)) {
            echo "<p style='color: red;'>Por favor, completa todos los campos.</p>";
        } else {
            $asunto = "¡Te recomiendo este sitio web!";
            $mensajeEmail = "Hola $nombreAmigo,\n\n";
            $mensajeEmail .= "$tuNombre te recomienda visitar este sitio web: https://recomendaramigo.000webhostapp.com/recomendar_amigo.php";
            $mensajeEmail .= "Mensaje de $tuNombre:\n";
            $mensajeEmail .= "$mensaje\n";
            $cabeceras = "From: $tuEmail";

            // Envía el correo electrónico
            if (mail($emailAmigo, $asunto, $mensajeEmail, $cabeceras)) {
                echo "<p style='color: green;'>El correo ha sido enviado con éxito a $emailAmigo.</p>";
            } else {
                echo "<p style='color: red;'>Hubo un error al enviar el correo.</p>";
            }
        }
    }

?>