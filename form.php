<?php

$nombre = $_GET['nombre'];
$mail = $_GET['correo'];
$mensaje = $_GET['mensaje'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ".\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El mensaje es: " . $_GET['mensaje'] . " \r\n";

$para = 'leonjv08@gmail.com';
$asunto = 'Este mail fue enviado desde LJV-Blog';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');
?>