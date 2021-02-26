<?php

$nombre = $_POST['nombre']
$email = $_POST['email']
$numero = $_POST['numero']
$mensaje = $_POST['mensaje']

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su email es: " . $email . " \r\n";
$mensaje .= "Telefono de contacto: " . $numero . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "enviado el: " . date('d/m/Y' , time());

$para = 'juanca200043@gmail.com';
$asunto = 'Hoja de vida web'

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>