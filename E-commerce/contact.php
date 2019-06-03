<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];

$email_from = 'companyrhm@outlook.com';
$email_subject ='contact form test';
$email_body = "User name : $name . \n " . "User e-mail $email . \n " . "Email subject : $subject .\n ". "User message : $message .\n ";


$to = 'companyrhm@gmail.com';
$headers = "form : $email_from \r\n ";
$headers .= "Reply-to : $email \r\n";
mail($to, $email_subject,$email_body,$headers);
header('Location: index.php');
}
?>