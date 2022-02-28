<?php
	$toEmail = "prakher1116ggg@gmail.com";
	$message = $_POST['comments'];
	$subject = $_POST['your_phone'];
	$mailHeaders = "From: ".$_POST['your_email'];
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
		echo"<p class='success'>Contact Mail Sent.</p>";
	} else {
		echo"<p class='Error'>Problem in Sending Mail.</p>";
	}
?>