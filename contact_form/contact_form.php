<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require '../vendor/autoload.php';


// configure
$from = 'info@servibot.co';
$sendTo = 'rocoutp@gmail.com';
$subject = 'New message from Personal page';
$fields = array('name' => 'Name', 'email' => 'Email', 'subject' => 'Subject', 'message' => 'Message');
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';


// SMTP Configuration
$smtpHost = 'live.smtp.mailtrap.io'; // Replace with your SMTP server
$smtpPort = 587; // Port (usually 587 for TLS)
$username = 'smtp@mailtrap.io'; // Your SMTP username
$password = '9c9ea627d01cab78a7bf14dcbe5f0528'; // Your SMTP password or app-specific password



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

            $mail = new PHPMailer(true);

            try {
                // SMTP server configuration
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'sandbox.smtp.mailtrap.io'; // SMTP server address
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = '6a21aff98f87e1'; // SMTP username
                $mail->Password = '9823005a04d702'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
                $mail->Port = 587; // TCP port (use 587 for TLS, 465 for SSL)

                // Email sender and recipient
                $mail->setFrom($from, 'Andres personal site'); // Sender's email and name
                $mail->addAddress($sendTo, 'Andres Quintero'); // Recipient's email and name

                // Email content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = $subject; // Email subject
                $mail->Body = $emailText; // HTML body
                $mail->AltBody = $emailText; // Plain text body

                // Send the email
                $mail->send();
                error_log('Email sent successfully.');
            } catch (Exception $e) {
                error_log("Failed to send email. Error: {$mail->ErrorInfo}");
            }


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
        $responseArray = array('type' => 'danger', 'message' => $errorMessage . json_encode($responseData));

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
?>
