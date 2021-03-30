<?php 
	include('validator.php');
?>
	<?php
if (!empty($_GET)) {
    if($_GET['ok']==="ok") {?>
    <div class="form-success">Форма успешно отправлена!</div>
    <?php
}}
?>
<?php
$headName = 'PixelBit';
    require('meta.php');?> 
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
			<form class="form_message" action="ContsctUs.php" method="POST">
				<p class="form__headliner">
					Submit your message
				</p>
				<div class="titles">
				<!--
					Name Input
				 -->
					<p>
						Your Name:
					</p>
					<input id="input__name" class="input" name="name" type="text" value='<?= !empty($_POST['name']) ? $_POST['name'] : '' ?>'/>
						<?php if(isset($name_error)) { ?>
							<p style='color: red;'><?php echo $name_error?></p>
						<?php } ?>						
					<div id="name_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<div class="titles">
				<!--
					E-mail Input
				 -->
					<p>
						Your E-mail:
					</p>
					<input id="input__email" class="input" name="email" type="text" value='<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>'/>					
						<?php if(isset($email_error)) { ?>
							<p style='color: red;'><?php echo $email_error?></p>
						<?php } ?>
					<div id="email_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<div class="titles">
				<!--
					phone Input
				 -->
					<p>
						Your phone:
					</p>
					<input id="input__number" class="input" name="phone" type="text" value='<?= !empty($_POST['phone']) ? $_POST['phone'] : '' ?>'/>
						<?php if(isset($number_error)) { ?>
							<p style='color: red;'><?php echo $number_error?></p>
						<?php } ?>
					<div id="phone_colorer" style="color: red; margin-left: 25px;"></div>
				</div>
				<div class="titles">
					<p>Text:</p>
					<textarea id="input__text" class="input" name="message" cols="22" rows="5"></textarea>
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