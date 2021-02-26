<?php

// Llamando campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$carta = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$carta .= "Su email es: " . $email . " \r\n";
$carta .= "Telefono de contacto: " . $numero . " \r\n";
$carta .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$carta .= "enviado el: " . date('d/m/Y' , time());

// Datos destinatario
$para = "juanca200043@gmail.com";
$asunto = "Hoja de vida web";

mail($para, $asunto, utf8_decode($carta), $header);

header("Location:index.html");

?>