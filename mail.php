<?php

// llamando los campos
$name = $_POST['name'];
$correo = $_POST['mail'];
$mensaje = $_POST['message'];

// datos del correo

$destinario = "wjose260@gmail.com";
$asunto = "Desde Djklack.com";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando El Mensaje

mail($destinario, $asunto , $carta);
header('location:mensaje-enviado.php');
?>