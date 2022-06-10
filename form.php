<?php

$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ".\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El mensaje es: " . $_POST['mensaje'] . " \r\n";

$para = 'leonjv08@gmail.com';
$asunto = 'Este mail fue enviado desde LJV-Blog';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');
?>