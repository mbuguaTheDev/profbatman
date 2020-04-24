<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
   header('Location: index');
} else {


   include 'header.php';

   //autoload from composeer
   require 'vendor/autoload.php';

   $paypal_seller = 'batmantheprofessor@gmail.com'; //PayPal account email address
   $paypal_url = 'https://www.paypal.com/cgi-bin/webscr';


   if (isset($_POST['order'])) {

      //simple variables
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $paperType = $_POST['paperType'];
      $unitTitle = $_POST['unitTitle'];
      $unitCode = $_POST['unitCode'];
      $paperFormat = $_POST['paperFormat'];
      $preferedEnglish = $_POST['preferedEnglish'];
      $instructions = $_POST['instructions'];
      $sources = $_POST['sources'];
      $pages = $_POST['pages'];
      $topic = $_POST['topic'];
      $subject = $_POST['subjectArea'];
      $amount = $_POST['amount'];
      $phoneNumber = $_POST['phoneNumber'];
      $path = "uploads/" . basename($_FILES["file"]["name"]);
      move_uploaded_file($_FILES['file']['tmp_name'], $path);


      //Get the worktype
      $workType = $_POST['workType'] == '1' ? 'Writing From Scratch' : 'Proofreading';

      //get the correct subject
      if ($_POST['subjectArea'] == '1') {
         $subjectArea = 'Chemistry';
      } elseif ($_POST['subjectArea'] == '2') {
         $subjectArea = 'Computer Science';
      } elseif ($_POST['subjectArea'] == '3') {
         $subjectArea = 'IT';
      } elseif ($_POST['subjectArea'] == '4') {
         $subjectArea = 'Maths';
      } else {
         $subjectArea = $_POST['subjectArea'];
      }

      //get the correct accdemic level
      if ($_POST['academicLevel'] == '1') {
         $academicLevel = 'High School';
      } elseif ($_POST['academicLevel'] == '2') {
         $academicLevel = 'Undergraduate';
      } elseif ($_POST['academicLevel'] == '3') {
         $academicLevel = 'Masters';
      } elseif ($_POST['academicLevel'] == '4') {
         $academicLevel = 'PHD';
      } else {
         $academicLevel = 'Undergraduate';
      }

      //Get the spacing
      $spacing = $_POST['spacing'] == '1' ? 'Double Spacing' : 'Single Spacing';

      //get the deadline
      if ($_POST['urgency'] == '1') {
         $adeadline = '14 Days';
      } elseif ($_POST['urgency'] == '2') {
         $deadline = '10 Days';
      } elseif ($_POST['urgency'] == '3') {
         $deadline = '7 Days';
      } elseif ($_POST['urgency'] == '4') {
         $deadline = '5 Days';
      } elseif ($_POST['urgency'] == '5') {
         $deadline = '3 Days';
      } elseif ($_POST['urgency'] == '6') {
         $deadline = '2 Days';
      } elseif ($_POST['urgency'] == '7') {
         $deadline = '24 Hours';
      } elseif ($_POST['urgency'] == '8') {
         $deadline = '12 Hours';
      } else {
         $deadline = '24 Hours';
      }

      //echo $deadline;

      $body = 'Cheers Batman!,<br>You have a new order, here are the details:<br>' . 'Name: ' .  $fname . ' ' . $lname . '<br>Email: ' . $email . '<br>Phone Number: ' . $phoneNumber . '<br>Amount Paid: ' . $amount . '<br>Paper Type: ' . $paperType . '<br>Work Type: ' . $workType  . '<br>AcedemicLevel : ' . $academicLevel . '<br>Deadline: ' . $deadline . '<br>Unit Title: ' . $unitTitle . '<br>Unit Code: ' . $unitCode . '<br>Paper Format: ' . $paperFormat . '<br>Preferred English: ' . $preferedEnglish . '<br>Number of Sources: ' . $sources . '<br>Pages: ' . $pages . '<br>Spacing: ' . $spacing . '<br>Topic:' . $topic . '<br>Subject: ' . $subject . '<br>Instructions: ' . $instructions;

      $mail = new PHPMailer(TRUE);

      // Open the try/catch block
      try {

         // Specify the SMTP settings.
         $mail->isSMTP();
         $mail->Username   = 'AKIAV6JL4IPYSWLQE7PR';
         $mail->Password   = 'BD31nJgmGz7bj9LjOW61bvXnXij4g/s+wbLXt3bH40hP';
         $mail->Host       = 'email-smtp.eu-west-2.amazonaws.com';
         $mail->Port       = 587;
         $mail->SMTPAuth   = true;
         $mail->SMTPSecure = 'tls';
         //sender
         $mail->setFrom('batmantheprofessor@gmail.com', 'Professor Batman');

         $mail->isHTML(TRUE);

         //recipient
         $mail->addAddress('batmantheprofessor@gmail.com');

         //subject
         $mail->Subject = 'New Order';

         //email body
         $mail->Body = $body;

         //files
         $mail->AddAttachment($path);

         // Send the mail.
         $mail->send();
      } catch (Exception $e) {
         echo $e->errorMessage();
      } catch (\Exception $e) {
         echo $e->getMessage();
      }
   }
}

?> <section id="batconfidential-area" class="bg-2 bg-cover">
    <div class="container">
        <div class="row">
            <!--start info area-->
            <div class="col-lg-8 offset-lg-2">
                <div class="batconfidential-card">
                    <div class="container">
                        <h4 class="text-white">Success!</h4>
                        <p class="text-light font-weight-normal">Your order details have been submitted and sent to a
                            qualified writer.</p>
                        <p class="text-light font-weight-normal">Click 'PAY NOW' to complete the order process. </p>
                        <p class="text-light font-weight-normal">We will keep you updated on the progress of your order.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php echo $paypal_url; ?>" method="post">
            <div class="row">
                <!-- Get paypal email address-->
                <input type="hidden" name="business" value="<?php echo $paypal_seller; ?>">
                <!-- Specify product details -->
                <input type="hidden" name="item_name" value="Wrting services">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                <!-- Submit Button -->
                <input type="hidden" name="cmd" value="_xclick">
                <div style="padding: 30px 0" class="col-sm">
                    <button type="submit" class="orderBtn" name="order">PAY NOW</button>
                </div>
            </div>
        </form>
        <div style="padding: 20px" class="row">
            <div class="card totalPrice">
                <h3>Total Price</h3>
                <h2 id="totalPrice"><?php echo $amount; ?></h2>
            </div>
        </div>
        <!--end info area-->
    </div>
</section>
<?php
include 'footer.php'
?>