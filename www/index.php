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

<div class="upBttn">
    <div class="arrow">&#8593;</div>
</div>
<div id="progress_line"></div>

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
        We using those principles to make awesome games
    </h1>

    <div class="features">
        <div class="f__item">
            <img src="img/teamwork.png" alt="" class="f__icon">
            <h5 class="f__title">Our team</h5>
            <div class="f__text">
                We have professional developers team that can improve any feature and realize most enjoyable  mechanic.
            </div>
        </div>

        <div class="f__item">
            <img src="img/arcade.png" alt="" class="f__icon">
            <h5 class="f__title">We are the same</h5>
            <div class="f__text">
                Everyone of us a gamer, so we know what gamers whant from our games and we try to do our best.
            </div>
        </div>

        <div class="f__item">
            <img src="img/quality.png" alt="" class="f__icon">
            <h5 class="f__title">Quality</h5>
            <div class="f__text">
                We're trying to do more than just games, we doing adventures that you will enjoy.
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

<script src="script.js"></script>
<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
</body>
</html>


