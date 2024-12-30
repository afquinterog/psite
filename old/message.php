<?php
$to      = 'rocoutp@gmail.com';
$subject = 'Job Contact';
$message = $_POST["email"] . " / " . $_POST["message"];
$headers = 'From: afq.servicesapp.co' . "\r\n" .
    'Reply-To: rocoutp@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://afq.servicesapp.co/index.php?msg=1#contact");
die();