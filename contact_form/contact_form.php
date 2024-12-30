<?php

// configure
$from = 'info@servibot.co';
$sendTo = 'rocoutp@gmail.com';
$subject = 'New message from Personal page';
$fields = array('name' => 'Name', 'email' => 'Email', 'subject' => 'Subject', 'message' => 'Message');
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';


// SMTP Configuration
$smtpHost = 'sandbox.smtp.mailtrap.io'; // Replace with your SMTP server
$smtpPort = 587; // Port (usually 587 for TLS)
$username = '6a21aff98f87e1'; // Your SMTP username
$password = '9823005a04d702'; // Your SMTP password or app-specific password


// let's do the sending

if(isset($_POST['recaptcha_response']) && !empty($_POST['recaptcha_response'])):
    //your site secret key
    $secret = '6LeIvakqAAAAAG1sCA8N2jSPYLBMwKRnNsTaJc0I';
    //get verify response data

    $c = curl_init('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['recaptcha_response']);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $verifyResponse = curl_exec($c);

    $responseData = json_decode($verifyResponse);
    if($responseData->success):
        try
        {
            $emailText = nl2br("You have new message from Contact Form\n");

            foreach ($_POST as $key => $value) {

                if (isset($fields[$key])) {
                    $emailText .= nl2br("$fields[$key]: $value\n");
                }
            }

            // $headers = array('Content-Type: text/html; charset="UTF-8";',
            //     'From: ' . $from,
            //     'Reply-To: ' . $sendTo,
            //     'Return-Path: ' . $sendTo,
            // );

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: $from" . "\r\n";
            $headers .= "Reply-To: $sendTo" . "\r\n";

            // $isMailSent = mail($sendTo, $subject, $emailText, $headers);

            // if ($isMailSent) {
            //     error_log("Mail sent successfully.");
            // } else {
            //     error_log("Failed to send mail.");
            // }

            //mail($sendTo, $subject, $emailText, implode("\n", $headers));

            sendSMTPMail($sendTo, $subject, $emailText, $from, $smtpHost, $smtpPort, $username, $password);

            $responseArray = array('type' => 'success', 'message' => $okMessage);
        }
        catch (\Exception $e)
        {
            $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
        }
        else {
            echo $responseArray['message'];
        }

    else:
        $errorMessage = 'Robot verification failed, please try again.';
        $responseArray = array('type' => 'danger', 'message' => $errorMessage . $responseData);

            header('Content-Type: application/json');

            echo $encoded;
    endif;
else:
    $errorMessage = 'Please click on the reCAPTCHA box.';
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
endif;


function sendSMTPMail($to, $subject, $message, $from, $smtpHost, $smtpPort, $username, $password) {
    $socket = fsockopen($smtpHost, $smtpPort, $errno, $errstr, 10);
    if (!$socket) {
        echo "Connection failed: $errstr ($errno)";
        return false;
    }

    // Server response
    function serverResponse($socket, $expectedCode) {
        $response = fgets($socket, 512);
        if (substr($response, 0, 3) != $expectedCode) {
            echo "Unexpected response: $response";
            return false;
        }
        return true;
    }

    // Helper to send a command and check response
    function sendCommand($socket, $cmd, $expectedCode) {
        fwrite($socket, $cmd . "\r\n");
        return serverResponse($socket, $expectedCode);
    }

    // Start conversation
    serverResponse($socket, '220');
    sendCommand($socket, "EHLO localhost", '250');
    sendCommand($socket, "AUTH LOGIN", '334');
    sendCommand($socket, base64_encode($username), '334');
    sendCommand($socket, base64_encode($password), '235');

    // Set sender and recipient
    sendCommand($socket, "MAIL FROM: <$from>", '250');
    sendCommand($socket, "RCPT TO: <$to>", '250');
    sendCommand($socket, "DATA", '354');

    // Send email headers and body
    $headers = "From: <$from>\r\n";
    $headers .= "To: <$to>\r\n";
    $headers .= "Subject: $subject\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    fwrite($socket, $headers . "\r\n" . $message . "\r\n.\r\n");
    serverResponse($socket, '250');

    // Close connection
    sendCommand($socket, "QUIT", '221');
    fclose($socket);

    echo "Email sent successfully!";
    return true;
}
?>
