<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thanks! We will get back in touch soon. '
	);

    $name = trim(stripslashes($_POST['name'])); 
    $email = trim(stripslashes($_POST['email'])); 
    $phone = trim(stripslashes($_POST['phone']));
    $company = trim(stripslashes($_POST['company']));
    $subject = trim(stripslashes($_POST['subject'])); 
    $message = trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'webinquiry@sutinen.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Company: ' . $company . "\n" . 'Email: ' . $email . "\n" . 'Phone number: ' . $phone "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $headers = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: webmaster@example.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    if(!mail($email_to, $email_subject, $email_message, $headers))
    {
      die('Fail to send');
    }else {
      echo json_encode($status);
      die('Sucess');
    } 
    ;?>
