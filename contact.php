<?php
if($_POST["send"]) {
	$first_name = $_POST["firstName"];
	$last_name = $_POST["lastName"];
	$email = $_POST["email"];
	$content = $_POST["content"];

	$toEmail = "ht.developerr@gmail.com";
	$mailHeaders = "From: " . $first_name . "<". $email .">\r\n";
	if(mail($toEmail, $email, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
		echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
	}
	else {
		echo '<p>We are sorry but the email did not go through.</p>';
	}
}
else {
    echo '<p>Something went wrong</p>';
}
?>