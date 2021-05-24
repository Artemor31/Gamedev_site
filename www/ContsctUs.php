<?php
	session_start();
	$headName = 'PixelBit';

    require('meta.php');
	require('header.php');
	require('login/connection.php');
	
	$query ="SELECT content FROM pagescontent WHERE id > 18"; 
	$result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link)); 
	
	if($result)
	{
		$count = mysqli_num_rows($result);
		$rows = mysqli_fetch_all($result, MYSQLI_NUM); 
	}
	$content = null;
	for($i = 0; $i < $count; $i++){
		$row = $rows[$i];
		$content[$i] = $row[0];
	}
	
	mysqli_close($connect);
?>

<div id="progress_line"></div>
	<div class="title__img">
		<img src="img/teamwork_support.png" alt="">
	</div>
	<div class="contact__title">
		<h2>
		<?php echo "$content[0]";?>	
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
						<td><?php echo "$content[1]";?></td>
						<td><?php echo "$content[2]";?></td>
					</tr>
					<tr>
					    <td><?php echo "$content[3]";?></td>
					    <td><?php echo "$content[4]";?></td>
					  </tr>
					  <tr>
					    <td><?php echo "$content[5]";?></td>
					    <td><?php echo "$content[6]";?>/td>
					  </tr>
					  <tr>
					    <td><?php echo "$content[7]";?></td>
					    <td><?php echo "$content[8]";?></td>
					  </tr>
				</table>
			</div>
		</div>
	</div>
	

	<div class="container">	
		<div class="feedback__form">
			<form class="form_message" action="validator.php" method="POST">
				<p class="form__headliner">
					Submit your message
				</p>
				<?php 
					if(!$_SESSION['user']){
						echo "<center style = \" color:#c064A6; \" >Only authorized users<br>allowed to send e-mails!</center>";
					}
				?>								
				<?php
					if (!empty($_GET)) {
						if($_GET['ok']==="ok") {?>
						<div style = "text-align: center; font-size: 22px; color: #42A69E;" class="form-success">Form sended!</div>
						<?php
					}}
				?>

				<div class="titles">
				<!--
					Name Input
				 -->
					<p>
						Your Name:
					</p>
					<input id="input__name" class="input" name="name" type="text" value='<?= !empty($_POST['input__name']) ? $_POST['input__name'] : '' ?>'/>
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
					<input id="input__email" class="input" name="email" type="text" value='<?= (!empty($_POST['input__email'])) ? $_POST['input__email'] : '' ?>'/>					
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

					<p>
						Text:
					</p>
					<textarea id="input__text" class="input" name="message" cols="22" rows="5"></textarea>
				</div>
				<input id="submit" class="submit" value="Send" type=<?php if($_SESSION['user']){echo "submit";}else{echo "reset";}?> />
			</form>
		</div>
	</div>


	<div class="container">
		<div class="support">
			<div class="support__text">
				<div class="support__text__title">
				<?php echo "$content[9]";?>
				</div>
				<div class="support__text__content">
				<?php echo "$content[10]";?>
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