<?php //session_start();
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');?>

<?php
$headName = 'Страница авторизации';
    require('meta.php');
?> 
<?php
        if (isset($_SESSION["message"])) {
            echo("<div>".$_SESSION["message "]."</div>");
            unset($_SESSION["message"]);
         }
         if (isset($_SESSION["debug"])) {
              echo($_SESSION["debug"]);
          }         
    ?>
    <form action="authorize.php" method="post">
        Вход<br/>
        Пользователь <input type="text" name="login"/><br/>
        Пароль <input type="password" name="pass"/>
        <input type="submit" name="ok" value=" Ok "/>
    </form>
</body>
</html>
