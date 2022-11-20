<?php

$name = $_POST['name']
$email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$mailheader = "From:".$name. "<" .$email. ">\r\n"

$recipient = "contacto@diegoibanezfotografia.com"; 
mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo '

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Gracias por contactarme! Te contestaré en breve!</h1>
        <p class="back">Volver a <a href="./index.html"></a>.</p>
        
    </div>
    
</body>
</html>


';


?>