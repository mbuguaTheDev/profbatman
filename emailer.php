<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//autoload from composeer
require $_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php' ;


if(isset($_POST['order'])){
   
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $paperType = $_POST['paperType'];
   $unitTitle = $_POST['unitTitle'];
   $unitCode = $_POST['unitCode'];
   $paperFormat = $_POST['paperFormat'];
   $preferedEnglish = $_POST['preferedEnglish'];
   $instructions = $_POST['instructions'];
   $sources= $_POST['sources'];
   $pages = $_POST['pages'];
   $topic = $_POST['topic'];
   $subject = $_POST['subjectArea'];
   
   //Get the worktype
   $workType = $_POST['workType'] == '1' ? 'Writing From Scratch' : 'Proofreading';

   //get the correct subject
   if( $_POST['subjectArea'] == '1'){
      $subjectArea = 'Chemistry';
      }
      elseif($_POST['subjectArea'] == '2'){
         $subjectArea = 'Computer Science'; 
      }
      elseif($_POST['subjectArea'] == '3'){
         $subjectArea = 'IT'; 
      }
      elseif($_POST['subjectArea'] == '4'){
         $subjectArea = 'Maths'; 
      }
      else{
         $subjectArea = $_POST['subjectArea']; 
      }

   //get the correct accdemic level
   if( $_POST['academicLevel'] == '1'){
      $academicLevel = 'High School';
      }
      elseif($_POST['academicLevel'] == '2'){
         $academicLevel = 'Undergraduate'; 
      }
      elseif($_POST['academicLevel'] == '3'){
         $academicLevel = 'Masters'; 
      }
      elseif($_POST['academicLevel'] == '4'){
         $academicLevel = 'PHD'; 
      }
      else{
         $academicLevel = 'Undergraduate'; 
      }

   //Get the spacing
   $spacing = $_POST['spacing'] == '1' ? 'Double Spacing' : 'Single Spacing';

   //get the deadline
   if( $_POST['urgency'] == '1'){
      $adeadline = '14 Days';
      }
      elseif($_POST['urgency'] == '2'){
         $deadline = '10 Days'; 
      }
      elseif($_POST['urgency'] == '3'){
         $deadline = '7 Days'; 
      }
      elseif($_POST['urgency'] == '4'){
         $deadline = '5 Days'; 
      }
      elseif($_POST['urgency'] == '5'){
         $deadline = '3 Days'; 
      }
      elseif($_POST['urgency'] == '6'){
         $deadline = '2 Days'; 
      }
      elseif($_POST['urgency'] == '7'){
         $deadline = '24 Hours'; 
      }
      elseif($_POST['urgency'] == '8'){
         $deadline = '12 Hours'; 
      }
      else{
         $deadline= '24 Hours'; 
      }

   //echo $deadline;

$body = 'Dear Batman, <br>Below are your new order details<br>' . 'Name: ' .  $fname . ' ' .$lname . '<br>Email: ' . $email . '<br>Paper Type: ' . $paperType . '<br>Unit Title: ' . $unitTitle . '<br>Unit Code: ' . $unitCode . '<br>Paper Format: ' . $paperFormat . '<br>Preferred English: ' . $preferedEnglish. '<br>Number of Sources: ' . $sources . '<br>Pages: ' . $pages . '<br>Topic:' . $topic . '<br>Subject: ' . $subject . '<br>Instructions: ' . $instructions; 

$mail = new PHPMailer(TRUE);

// Open the try/catch block
try {
   //sender
   $mail->setFrom($email, $fname);
   
   $mail-> isHTML(TRUE);

   //recipient
   $mail->addAddress('opencubetechnologies@gmail.com');

   //subject
   $mail->Subject = 'New Order';

   //email body
   $mail->Body = $body;

   // Send the mail.
   //$mail->send();
   paypal();
}
catch (Exception $e)
{
   
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
   
   
}

function paypal(){
   header('Location: ordersuccess');

}
?>