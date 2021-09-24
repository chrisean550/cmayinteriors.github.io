<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';
if(isset($_POST['submit'])){
  $name = $_POST['full-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'WebsiteEmailBot@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'TGmvUBNgyVx_7Q2'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('WebsiteEmailBot@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('chriseannichols550@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received - C. May Interiors Contact';
    $mail->Body = "<h3>From : $name <br>Email: $email <br>Phone: $phone <br>Message : $message</h3>";

    $mail->send();
    $alert = '<script type="text/javascript">alert("Message Sent! We will be in touch soon.")</script>';
  } catch (Exception $e){
    $alert = '<script type="text/javascript">'.$e->getMessage().'</script>';
  }
}
?>