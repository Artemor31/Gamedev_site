<?php
$headName = 'PixelBit';
    require('meta.php');
    require('header.php');
	require('login/connection.php');
	
	$query ="SELECT content FROM pagescontent WHERE id BETWEEN 8 AND 18"; 
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
<div class="intro_about">	
	<div class="container">
		<div class="about__inner">
			<h1 class="our__team__title">
			<?php echo "$content[0]";?>
			</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="members">
		<h1><?php echo "$content[1]";?></h1>
		<div class="member member__1">
			<img src="img/member1.jpg" alt="" class="member_photo">
			<div class="member__discription">
				<h4>
				<?php echo "$content[2]";?>
				</h4>
				<div class="member__text">
				<?php echo "$content[3]";?>	
				</div>
			</div>
		</div>
		<div class="member member__2">
			<div class="member__discription">
				<h4>
				<?php echo "$content[4]";?>
				</h4>
				<div class="member__text">
				<?php echo "$content[5]";?>
				</div>
			</div>
			<img src="img/member2.jpg" alt="" class="member_photo">
		</div>
		<div class="member member__3">
			<img src="img/member3.webp" alt="" class="member_photo">
			<div class="member__discription">
				<h4>
				<?php echo "$content[6]";?>
				</h4>
				<div class="member__text">
				<?php echo "$content[7]";?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="membership">
	<div class="container">
		<div class="membersip__text">
			<h4 class="membership__title">
			<?php echo "$content[8]";?>
			</h4>
			<?php echo "$content[9]";?>
			</div>
	<img src="img/whyUs.webp" alt="" class="membership__img">
	</div>
</div>

<?php
		require('footer.php');
?>
<script src="script.js"></script>
</body>
</html>