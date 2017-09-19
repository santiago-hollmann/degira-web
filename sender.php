<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'santiago.hollmann@gmail.com';
$siteName = "De Gira, producciones viajeras";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$name = $_POST['fname'];
$mail = $_POST['email'];
$subject = $_POST['subj'];
$message = $_POST['mssg'];
$rol = $_POST['rol'];


if (isset($name) && isset($mail) && isset($message) && isset($rol)) {


	$mailSub = '[Contact] [' . $siteName . '] '.$subject;

	$body = 'Sender Name: ' . $name . "\n\n";
	$body .= 'Sender Mail: ' . $mail . "\n\n";
	$body .= 'Message Subject: ' . $subject . "\n\n";
	$body .= 'Message: ' . $message;
	$body .= 'Rol: ' . $rol;


	$header = 'From: ' . $mail . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $mailSub, $body, $header);
}else{
	echo '0';
}
?>