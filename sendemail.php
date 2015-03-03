<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thanks! We will get back in touch soon. '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 
    $company_name = @trim(stripslashes($_POST['company_name']));
    $phone = @trim(stripslashes($_POST['phone']));
		
    $email_from = $email;
    $email_to = 'webinquiry@sutinen.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message . "\n\n" . 'Company Name: ' . $company_name . "\n\n" . 'Phone: ' . $phone;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
