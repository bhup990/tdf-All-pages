<?php
session_start();

include 'conn.php';
require 'phpmailer/PHPMailerAutoload.php';
if (isset($_POST['sumitBtn'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $emailquery = "SELECT * FROM messageData WHERE email = '$email' ";
  $sqliquery = mysqli_query($conn, $emailquery);

    if (mysqli_num_rows($sqliquery) > 0) {

      $_SESSION['status'] = "Email Already Exists";
      $_SESSION['status_code'] = "warning";
      header('Location:index.php');

   }else {
     $insertquery = "INSERT INTO messageData(name, email, message)
     VALUES('$name','$email','$message')";

     $mysqli = mysqli_query($conn, $insertquery);

     if ($mysqli) {
       $_SESSION['status'] = "Message sent...";
       $_SESSION['status_code'] = "success";
       header('Location:index.php');
       emailsmtp();
     }else {
       $_SESSION['status'] = "Not Data Inserted";
       $_SESSION['status_code'] = "error";
       header('Location:index.php');
     }
   }
}
function emailsmtp(){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $mail = new PHPMailer;

        $mail->IsSMTP();

        $mail->Host       = "smtp.gmail.com";      // SMTP server example
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
        $mail->Username   = "etest3385@gmail.com";     // SMTP account username example
        $mail->Password   = "sbhupendra@952";        // SMTP account password example

        $mail->setFrom($_POST['email']);
        $mail->addAddress('etest3385@gmail.com', 'person one');
        $mail->addAddress('digitalmarketing@tdfjewellery.com', 'tdf diamond factory');
        // $mail->addAddress('sbhupendr6774@gmail.com', 'person third');

        $mail->addReplyTo('etest3385@gmail.com', 'Information');
        // $mail->addCC('sbhupendra6774@gmail.com');
        // $mail->addBCC('sbhupendr6774@gmail.com');


        // The subject of the message.
        $mail->Subject = 'Received Message From Client ' . $name;

        $message = '<html><body>';

        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";

        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

        $message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

        $message .= "</table>";
        $message .= "</body></html>";

        $mail->Body = $message;

        $mail->isHTML(true);

        if (!$mail->send()) {
            echo "<h1>Something Wrong</h1>";
        }
    }
 ?>
