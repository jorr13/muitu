<?php
require '../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Fetching Values from URL.
$name = $_POST['name1'];
$email = $_POST['email1'];
$telefono = $_POST['telefono1'];
$mailbody = $_POST['mensaje1'];
$telefono = $_POST['telefono1'];
/////////////////////////////////////////////////////////////////////////////
$subject = $name;
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.lobsterblum.io';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username ='info@lobsterblum.io';                 // SMTP username
    $mail->Password = '&ZJH7,2JYHXu';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@lobsterblum.io', 'Mailer');
    $mail->addAddress($email, $name);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $name;
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
    $mail->Body    = $sendmessage;

    $mail->send();
    echo "Thank you. We'll be in contact very soon.";
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