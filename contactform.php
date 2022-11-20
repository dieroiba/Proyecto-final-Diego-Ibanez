<?php

if (isset ($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "contacto@diegoibanezfotografia.com";
    $headers = "From: ".$mailFrom;
    $txt = "Recibiste un email de ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");

    mail();
    
}