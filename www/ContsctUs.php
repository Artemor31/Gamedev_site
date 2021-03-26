<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
        require('links.php');
    ?>
	<title>
		PixelBit
	</title>
</head>
<body>

    <?php
        require('header.php');
    ?>

<div id="progress_line"></div>
	<div class="title__img">
		<img src="img/teamwork_support.png" alt="">
	</div>

	<div class="contact__title">
		<h2>
			Contact us, we need your opinion
		</h2>
	</div>

	<div class="contacts">
		<div class="container">
			<div class="contacts__inner">
				<table class="contacts__table">
					<tr>
						<th align="left">Message type</th>
						<th align="left">E-mail</th>
					</tr>
					<tr>
						<td>Support</td>
						<td>support@pixelBit.com</td>
					</tr>
					<tr>
					    <td>Job</td>
					    <td>job@pixelBit.com</td>
					  </tr>
					  <tr>
					    <td>Press</td>
					    <td>press@pixelBit.com</td>
					  </tr>
					  <tr>
					    <td>Common</td>
					    <td>contact@pixelBit.com</td>
					  </tr>
				</table>
			</div>
		</div>
	</div>

	<div class="container">	
		<div class="feedback__form">
			<form class="form_message" action="ContsctUs.php" method="post">
				<p class="form__headliner">
					Submit your message
				</p>
				<div class="titles">
					<p>
						Your Name:
					</p>
					<input id="input__name" class="input" name="name" type="text"/>
						<?php
							$usernameRegex = '/^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD';
							$username = $_POST['name'];

							if (!preg_match($usernameRegex, $username)){
							}else{
							echo "username ok";
							}
						?>
					<div id="name_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<div class="titles">
					<p>
						Your E-mail:
					</p>
					<input id="input__email" class="input" name="email" type="text"/>					
						<?php
							$emailRegex = "/^[a-zA-Zа-яА-ЯёЁ_\d][-a-zA-Zа-яА-ЯёЁ0-9_\.\d]*\@[a-zA-Zа-яА-ЯёЁ\d][-a-zA-Zа-яА-ЯёЁ\.\d]*\.[a-zA-Zа-яА-Я]{2,6}$/i";
							$email = $_POST['email'];

							if (!preg_match($emailRegex, $email)){
							}else{
							echo "email ok";
							}
						?>
					<div id="email_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<div class="titles">
					<p>
						Your phone:
					</p>
					<input id="input__number" class="input" name="phone" type="text"/>
						<?php
							$numberRegex = "/^[0-9+]/";
							$number = $_POST['phone'];

							if (!preg_match($numberRegex, $number)){
							}else{
							echo "number ok";
							}
						?>
					<div id="phone_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<div class="titles">
					<p>
						Text:
					</p>
					<textarea id="input__text" class="input" name="message" cols="22" rows="5"></textarea>
					<div id="text_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<input id="submit" class="submit" value="Send" type="submit"/>
			</form>
		</div>
	</div>


	<div class="container">
		<div class="support">
			<div class="support__text">
				<div class="support__text__title">
					Still have problems?
				</div>
				<div class="support__text__content">
					Open private chat with our agent and ask everything you want.
				</div>
				<a href="#" class="support__text__botton">
					OPEN
				</a>
			</div>
			<img src="img/support_person.jpg" alt="" class="support__image">
		</div>
	</div>

	<?php
	  require('footer.php');
	?> 
	
	<script src="script.js"></script>
</body>
</html>