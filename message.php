<?php
$to      = 'andres@zeroplatform.com';
$subject = 'Job Contact ' . $_GET["email"];
$message = $_GET["message"];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://localhost:8888/index.php?msg=1#contact");
die();