<?php
    $destinatario = 'paris7287@gmail.com'
    //este es el correo al que se enviará correo
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mensaje = $_POST['mensaje'];

    $header = "Sent from Vila Modena";
    $mensajeCompleto = $mensaje . "\nAtentamente: . $nombre";

    mail($destinatario, $subject, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente)</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";


?>