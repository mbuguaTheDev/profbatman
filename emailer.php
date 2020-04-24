<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
$sender = 'batmantheprofessor@gmail.com';
$senderName = 'Professor Batman';

$recipient = 'batmantheprofessor@gmail.com';

$usernameSmtp = 'AKIAV6JL4IPYSWLQE7PR';
$passwordSmtp = 'BD31nJgmGz7bj9LjOW61bvXnXij4g/s+wbLXt3bH40hP';
$host = 'email-smtp.eu-west-2.amazonaws.com';
$port = 587;

// The subject line of the email
$subject = 'New Inquiry for professor batman';

// The HTML-formatted body of the email
$body = '<h2>Hi Batman</h2>
    <p>You have a new inquiry from:</p>' . $name . '
    <p>Sender Email:</p>' . $email . '
    <p>Here is the message:</p>' . $message;


$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP();
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';

    $mail->setFrom($sender, $senderName);
    $mail->addAddress($recipient);
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $body;
    $mail->Send();
    header('Location: index');
    } catch (phpmailerException $e) {
        echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
    } catch (Exception $e) {
        echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
    }
}

?>