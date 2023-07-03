<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Lo podrï¿½s tocar... Sokoban :: Enviando correo</title>
<link rel="stylesheet" href="tienda.css" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<META HTTP-EQUIV="Refresh" CONTENT="15; URL=./index.php">
</head>

<body>

<?php

	$mail = "Reserva SOKOBAN.\n\n";
	$mail .= "Nombre: " . $HTTP_POST_VARS["Nombre"] . "\n";
	$mail .= "Correo electrónico: " . $HTTP_POST_VARS["Correo"] . "\n";
	$mail .= "Cantidad: " . $HTTP_POST_VARS["Cantidad"] . "\n";
	$mail .= "Observaciones: " . $HTTP_POST_VARS["Observaciones"] . "\n";
	$mail .= "------------------------------\n";
	$mail .= "IP remitente: ";
	$mail .= $HTTP_SERVER_VARS['REMOTE_ADDR'];
	$mail .= ": ";
	$mail .= $HTTP_SERVER_VARS['REMOTE_PORT'];

	$headers = "From: " . $HTTP_POST_VARS["Nombre"] . "<" . $HTTP_POST_VARS["Correo"] . ">\r\n";
	$headers .= "Reply-to: " . $HTTP_POST_VARS["Nombre"] . "<" . $HTTP_POST_VARS["Correo"] . ">\r\n";

	mail("sokoban.compiler@gmail.com", "Reserva SOKOBAN.", $mail, $headers);

?>

<div id="cuerpo">

<div class="noticia">
<br>
<h4>Tu reserva ha sido realizada.</h4>
<h5>Se hará entrega de la cinta en MadriSX, el 10 de marzo.</h5>
<h5>Gracias :)</h5>
<div class="noticia_centro"><img src="./Foto.jpg" alt="Oferta Sokoban"/></div>
<br>
</div>

</div>

</body>

</html>
