<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// //autoload from composer
// //require 'vendor/autoload.php' ;
// require 'src/PHPMailer.php';

// $mail = new PHPMailer(TRUE);

// // Open the try/catch block
// try {
//    //sender
//    $mail->setFrom('lmbugua45@gmail.com', 'Lawrence');
   
//    $mail-> isHTML(TRUE);

//    //recipient
//    $mail->addAddress('opencubetechnologies@gmail.com');

//    //subject
//    $mail->Subject = 'New Order';

//    //email body
//    $mail->Body = "Hi, this is just a test message";

//    // Send the mail.
//    $mail->send();
// }
// catch (Exception $e)
// {
   
//    echo $e->errorMessage();
// }
// catch (\Exception $e)
// {
//    echo $e->getMessage();
// }

// the message


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require 'vendor/autoload.php';

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender = 'batmantheprofessor@gmail.com';
$senderName = 'Professor Batman';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
$recipient = 'batmantheprofessor@gmail.com';

// Replace smtp_username with your Amazon SES SMTP user name.
$usernameSmtp = 'AKIAV6JL4IPYSWLQE7PR';

// Replace smtp_password with your Amazon SES SMTP password.
$passwordSmtp = 'BD31nJgmGz7bj9LjOW61bvXnXij4g/s+wbLXt3bH40hP';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
//$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$host = 'email-smtp.eu-west-2.amazonaws.com';
$port = 587;

// The subject line of the email
$subject = 'AWS mail testing';

// The plain-text body of the email
$bodyText =  "Just a simple test from AWS!";

// The HTML-formatted body of the email
$bodyHtml = '<h1>Email Test</h1>
    <p>This email is from aws testing!</p>';

$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

    // Specify the message recipients.
    $mail->addAddress($recipient);
    // You can also add CC, BCC, and additional To recipients here.

    // Specify the content of the message.
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $bodyHtml;
    $mail->AltBody    = $bodyText;
    $mail->Send();
    echo "Email sent!" , PHP_EOL;
} catch (phpmailerException $e) {
    echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
} catch (Exception $e) {
    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
}

?>