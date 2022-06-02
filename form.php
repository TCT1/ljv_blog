<?php

$nombre = $_POST['nombre'];
$mensaje = $_POST['messageBox'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n"

$para = 'leonjv08@gmail.com'
$asunto = 'Este mail fue enviado desde LJV-Blog'

mail($para, $asunto, utf8_decode($mensaje), $header)

header('Location:index.html')
?>