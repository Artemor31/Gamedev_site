<html>
    <head>
        <title>Главная<title>
    </head>
    <body><?php
            if (isset($_SESSION["message"])) {
                echo "<div>".$_SESSION["message "]."</div>";
                unset($_SESSION["message"]);
            }
        ?><?php 
            if ($_SESSION["login"]) {
                echo "<h1>Привет, ".$_SESSION["login"]."</h1>"; 
            }
        ?></body>
</html>
