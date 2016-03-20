<?php


//$name = $_POST['name'];
//$request = $_POST['request'];

require 'PHPMailerAutoload.php';
//Create a new SMTP instance
$smtp = new SMTP;
//Enable connection-level debug output
$smtp->do_debug = SMTP::DEBUG_CONNECTION;
try {
//Connect to an SMTP server
    if ($smtp->connect('smtp.gmail.com', 25)) {
        //Say hello
        if ($smtp->hello('smtp.gmail.com')) { //Put your host name in here
            //Authenticate
            if ($smtp->authenticate('thebnbhub@gmail.com', 'P3dro123')) {
                echo "Connected ok!";
            } else {
                throw new Exception('Authentication failed: ' . $smtp->getLastReply());
            }
        } else {
            throw new Exception('HELO failed: '. $smtp->getLastReply());
        }
    } else {
        throw new Exception('Connect failed');
    }
} catch (Exception $e) {
    echo 'SMTP error: '. $e->getMessage(), "\n";
}
//Whatever happened, close the connection.
$smtp->quit(true);

/*
require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Set the hostname of the mail server
$mail->Host = "smtp.live.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "thebnbhub@outlook.com";
//Password to use for SMTP authentication
$mail->Password = "Pedro123";
//Set who the message is to be sent from
$mail->setFrom('thebnbhub@outlook.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('iscott3007@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
*/

//$to = "iscott3007@gmail.com";
//$subject = "Test Email from theBnBhub";

//$body = "This is an automated email from theBnBhub... you booking is confirmed /n/n $request";

//mail($to,$subject,$body);

//echo "message sent!";

?>


