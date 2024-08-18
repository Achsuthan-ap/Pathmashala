<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Make sure Composer's autoload is included

if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'achsuthan2021e@gmail.com';                 // SMTP username
    $mail->Password   = 'yxyl ynzz vdyn hdzx';                       // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('achsuthan2021e@gmail.com');              // Add a recipient

    // Content
    $mail->isHTML(false);                                       // Set email format to plain text
    $mail->Subject = "$m_subject:  $name";
    $mail->Body    = "You have received a new message from your website contact form.\n\n".
                     "Here are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";

    $mail->send();
    http_response_code(200); // Success
} catch (Exception $e) {
    http_response_code(500); // Failure
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
