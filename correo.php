<?php
    $destinatario = "moonassistantcontact@gmail.com";
    //esto es correo del destinatario
    $nombre = $_POST ['nombre'];
    $asunto = $_POST ['asunto'];
    $email = $_POST ['email'];
    $mensaje = $_POST ['mensaje'];

    $header = "Enviado Desde Pagina MOON";
    $mensajeCompleto = $mensaje . "\nAtentamente" . $nombre
    
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo Enviado Correctamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>