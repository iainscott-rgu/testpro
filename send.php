<?php

$title = $_POST['title'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.live.com";
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = "thebnbhub@outlook.com";
$mail->Password = "Pedro123";
$mail->setFrom('thebnbhub@outlook.com');
$mail->addAddress('iscott3007@gmail.com');
$mail->Subject = 'Booking Confirmation';
//$mail->msgHTML(file_get_contents('contents.html'), dirname(testpro));
$mail->Body = 'First Name: $firstname \n Surname: $surname \n';



//$mail->addAttachment('');

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>


