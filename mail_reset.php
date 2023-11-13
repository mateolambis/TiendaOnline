<?php
// Varios destinatarios
$para  = 'Papercut@user.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Restablecer contraseña WILYMAT';
$codigo= rand(1000,9999);
// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer Contraseña</title>
</head>
<body>
  <h1>WILYMAT</h1>
  <div style="text-aling: center; background-color: #ccc">
    <p>Restablecer Contraseña</p>
    <h3>'.$codigo.'</h3>
    <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
  </div>  
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>