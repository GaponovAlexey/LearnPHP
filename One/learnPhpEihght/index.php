<?php

$message = "Line 1\r\nLine 2\r\nLine 3";
$to = "alexei.gaponov@gmail.com";
$subject = "Tema message";
$headers = array(
	'From' => 'webmaster@example.com',
	'Reply-To' => 'webmaster@example.com',
	'X-Mailer' => 'PHP/' . phpversion()
);
mail ($to, $subject, $message, $headers);