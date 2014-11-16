<?php
//echo "this will show on submit<br /><br />"; 

$email_body = "";
$email_body = $email_body . "Name : " . $_POST["name"] . "<br />";
$email_body = $email_body . "Email : " . $_POST["email"] . "<br />";
$email_body = $email_body . "Message : " . $_POST["message"] . "<br />";
//echo $email_body;
//TO:DO send email

header("Location: contact-thanks.php");

 ?>