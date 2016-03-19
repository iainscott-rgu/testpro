<?php


$name = $_POST['name'];
$request = $_POST['request'];

$to = "iscott3007@gmail.com";
$subject = "Test Email from theBnBhub";

$body = "This is an automated email from theBnBhub... you booking is confirmed /n/n $request";

mail($to,$subject,$body);

echo "message sent!";

?>
