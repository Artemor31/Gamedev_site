<?php 
	$to  = "artem.artemov311@gmail.com";
	
	$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

	$headers = "Content-Type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: <pixel123.ru> \r\n"; 
	$headers .= "Reply-To: ".$email." \r\n"; 

	$emailMessage = $message.
	' With pleasure, '.$username.
	' Number: '.$number.
	' Email '.$email;

	require('login/connection.php');

	$query_selector = mysqli_query($connect, "INSERT INTO emails VALUES (NULL, '$username', '$email', '$number', '$emailMessage')");

	mail($to, $subject, $emailMessage, $headers);

	header("Location: http://{$_SERVER['HTTP_HOST']}/www/ContsctUs.php?ok=ok");
	exit;
?>