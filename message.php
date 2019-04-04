<?php
$to      = 'andresquintero@zeroplatform.com';
$subject = 'Job Contact ' . $_GET["email"];
$message = $_GET["message"];
$headers = 'From: andresquintero@zeroplatform.com' . "\r\n" .
    'Reply-To: andresquintero@zeroplatform.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://afquintero.tk/index.php?msg=1#contact");
die();