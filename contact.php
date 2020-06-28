<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['email'];
	
	$email_from = 'vishalpale.com';
	
	$email_subject = 'new form';
	
	$email_body = "User Name: $name.\n"
	               "User Email: $visitor_email.\n"
				    "User Message: $message.\n";
	
	$to = "vishalpale@gmail.com";
	
	$headers = "From: $email_from\r\n";
	
	$headers .= "reply-to: $visitor_email\r\n";
	
	mail($to,$email,$email_body,$headers);
	
	header("Location: index.html")