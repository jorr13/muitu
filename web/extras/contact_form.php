<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// Fetching Values from URL.
$name = $_POST['name1'];
$email = $_POST['email1'];
$mailbody = $_POST['mensaje1'];
$telefono = $_POST['telefono1'];
$correo_enviar =$_POST['correo_enviar1'];
/////////////////////////////////////////////////////////////////////////////
$subject = $name;
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.muituhandmade.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username ='contact@muituhandmade.com';                 // SMTP username
    $mail->Password = 'muitucontramuitu';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('contact@muituhandmade.com', 'Muitu Contact');
    $mail->addAddress($email, $name);     // Add a recipient
    $mail->addAddress($correo_enviar, 'Sumbit Muitu');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $name;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $email. "\r\n"; // Sender's Email
    $headers .= 'Cc:' . 'adriansalvatori@gmail.com'. "\r\n"; // Carbon copy to Sender
    $template = ''
    . 'Nombre: ' . $name . '<br/><br/>'
    . 'Email: ' . $email . '<br/><br/>'
    . 'Telefono: ' . $telefono . '<br/><br/>'
    . '<strong>' . $mailbody . '</strong><br/><br/>';
    $sendmessage = "<div style=\"background-color: #f3f3f3;color:white;min-height:  500px;padding: 15%;box-sizing:  border-box;text-align:  center;font-size:15px;\"> <a href=\"http://www.muituhandmade.com\"><img style=\"margin: 20px auto; height:100px; width: 200px;\" src=\"http://www.muituhandmade.com/app/uploads/2018/06/Logo-02.png\"></a> <div style=\"background-image: url(http://www.muituhandmade.com/app/uploads/2018/06/contact-bg-3.jpg);color:white;min-height:  500px;padding: 15%;box-sizing:  border-box;text-align:center;width: 70%; margin: 0 auto;height: 120%;background-repeat: no-repeat;background-size: cover;box-shadow: 0 0 30px rgba(0,0,0,0.2);\"> <div style=\"margin-top: 10%!;padding: 10%;width: 110%; position: relative;background-color: #fff;box-shadow: 0 0 50px rgba(0,0,0,.2)z-index: 8;\">". $template . "</div></div></div>";
    //Message lines should not exceed 70 characters (PHP rule), so wrap it.
   
    $mail->MsgHTML("".$sendmessage.""); 

    $mail->send();
    echo "Gracias. Estaremos en contacto muy pronto.";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


// Fetching Values from URL.
/*$name = $_POST['name1'];
$email = $_POST['email1'];
$mailbody = $_POST['plan1'];
$telegram = $_POST['telegram1'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

$subject = $name;
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $email. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white; font-size: 15px"><h1>Hello ' . $name . ',</h1>'
. '<br/>Thank you for Contacting Us.<br/><br/>'
. 'Name: ' . $name . '<br/>'
. 'Email: ' . $email . '<br/>'
. 'User Telegram: ' . $telegram . '<br/>'
. '<strong>Plan: ' . $mailbody . '</strong><br/><br/>'
. 'This is a confirmation mail.'
. '<br/>'
. 'We Will contact You as soon as possible .</div>';
$sendmessage = "<div style=\"background-color: #f3f3f3;color:white;min-height:  500px;padding: 15%;box-sizing:  border-box;text-align:  center;\"> <a href=\"https://lobsterblum.io\"><img style=\"margin: 20px auto; height:50px; width: 50px;\" src=\"https://lobsterblum.io/app/uploads/2018/05/cropped-Lobsterblum-iso-03-150x150.png\"></a> <div style=\"height:  90%;width:  90%;max-width:  350px;margin: 0 auto;text-align:  left;padding: 25px;border-radius: 10px;background: linear-gradient(135deg,#571845,#900c3d 26%,#c70038 51%,#ff5733 76%,#ffc300);box-shadow: 0 0 30px rgba(0,0,0,0.2);\">" . $template . "</div></div>";
 //Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
 //Send mail by PHP Mail Function.
mail("info@lobsterblum.io", $subject, $sendmessage, $headers);

echo "Thank you. We'll be in contact very soon.";
} else {
echo "<span>* invalid email *</span>";
}*/

?>