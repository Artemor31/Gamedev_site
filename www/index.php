<?php   
session_start();
$headName = 'PixelBit';
require('meta.php');
require('header.php');
require('login/connection.php');

$query ="SELECT content FROM pagescontent WHERE id < 8"; 
$result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link)); 

if($result)
{
    $rows = mysqli_fetch_all($result, MYSQLI_NUM); 
}
$count = count($rows);
$content = null;
for($i = 0; $i < $count; $i++){
    $row = $rows[$i];
    $content[$i] = $row[0];
}

mysqli_close($connect);
?>

<div class="intro" id="intro">
    <div class="container">
        <div class="inner">
            <h1>We create
            <span class="typer" id="main" data-words="games,fun" data-colors="#ed426d,#6d67c6" 
                     data-loop="1" data-delay="300" data-deleteDelay="1000">
            </span>
            <span class="cursor" data-owner="main"></span>
            </h1>            
            <a href="" class="title__button">
                <img src="img/playIcon.png" alt="">
                <div class="intro__button_text">
                    Explore more
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="features__title">
        <?php echo "$content[0]";?>
    </h1>

    <div class="features">
        <div class="f__item">
            <img src="img/teamwork.png" alt="" class="f__icon">
            <h5 class="f__title"><?php echo "$content[1]";?></h5>
            <div class="f__text">
            <?php echo "$content[4]";?>
            </div>
        </div>

        <div class="f__item">
            <img src="img/arcade.png" alt="" class="f__icon">
            <h5 class="f__title"><?php echo "$content[2]";?></h5>
            <div class="f__text">
            <?php echo "$content[5]";?>
            </div>
        </div>

        <div class="f__item">
            <img src="img/quality.png" alt="" class="f__icon">
            <h5 class="f__title"><?php echo "$content[3]";?></h5>
            <div class="f__text">
            <?php echo "$content[6]";?>
            </div>
        </div>
    </div>
</div>

<div class="games">
    <div class="game__item">
        <img src="img/game1.jpg" alt="" class="game__img">
        <div class="game__discr">
            <h4 class="game__title">
                Game 1
            </h4>
            <div class="game__text">
                Awesome gameplay discription
            </div>
        </div>
    </div>
    <div class="game__item">
        <img src="img/game2.jpg" alt="" class="game__img">
        <div class="game__discr">
            <h4 class="game__title">
                Game 2
            </h4>
            <div class="game__text">
                Awesome gameplay discription
            </div>
        </div>
    </div>
    <div class="game__item">
        <img src="img/game3.jpg" alt="" class="game__img">
        <div class="game__discr">
            <h4 class="game__title">
                Game 3
            </h4>
            <div class="game__text">
                Awesome gameplay discription
            </div>
        </div>
    </div>
    <div class="game__item">
        <img src="img/game4.jpg" alt="" class="game__img">
        <div class="game__discr">
            <h4 class="game__title">
                Game 4
            </h4>
            <div class="game__text">
                Awesome gameplay discription
            </div>
        </div>
    </div>
    <div class="game__item">
        <img src="img/game5.jpg" alt="" class="game__img">
        <div class="game__discr">
            <h4 class="game__title">
                Game 5
            </h4>
            <div class="game__text">
                Awesome gameplay discription
            </div>
        </div>
    </div>
    <div class="game__item">
        <img src="img/game6.jpg" alt="" class="game__img">
        <div class="game__discr">
            <h4 class="game__title">
                Game 6
            </h4>
            <div class="game__text">
                Awesome gameplay discription
            </div>
        </div>
    </div>
</div>

<?php
  require('footer.php');
?> 


