	<?php 

		$to  = "artem.artemov311@gmail.com";
		$subject = "Message from PixelBit"; 

		$headers .= "Content-Type: text/html; charset=utf-8 \r\n"; 
		$headers .= "From: <pixel123.ru> \r\n"; 
		$headers .= "Reply-To: testmail@gmail.com \r\n"; 

		mail($to, $subject, $message, $headers); 
	?>