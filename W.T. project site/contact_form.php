<?php

$name = $_POST['name'];
$email = $_POST['cemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "myemail@myemail.com";
$subject = "New Message";

mail($to, $subject, $message, "FROM: " , $name);
echo "Your message has been send!"
?>
