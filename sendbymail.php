<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su Telefono: " . $phone . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ventas@165logistics.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>