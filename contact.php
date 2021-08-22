<?php
if(!empty($_POST["send"])) {
	$first_name = $_POST["firstName"];
	$last_name = $_POST["lastName"];
	$email = $_POST["email"];
	$content = $_POST["content"];

	$toEmail = "ht.developerr@gmail.com";
	$mailHeaders = "From: " . $first_name . "<". $email .">\r\n";
	if(mail($toEmail, $email, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact.php";
?>