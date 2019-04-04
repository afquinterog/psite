<?php
$to      = 'andresquintero@zeroplatform.com';
$subject = 'Job Contact ' . $_POST["email"];
$message = $_POST["message"];
$headers = 'From: afquintero.tk' . "\r\n" .
    'Reply-To: andresquintero@zeroplatform.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://afquintero.tk/index.php?msg=1#contact");
die();