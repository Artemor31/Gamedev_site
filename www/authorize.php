<?php
$_POST['login'] = "loggin";
$_POST['pass'] = "pass";
// соединяемся с базой
$conn = mysqli_connect("localhost","admin","admin");
mysqli_select_db($conn, "my_db");
// составляем запрос
$query = "SELECT * FROM users WHERE login='". $_POST['login']."' AND pass='".
md5($_POST['pass'])."';";
$q = mysqli_query($conn, $query);

$n = mysqli_num_rows($q);
if($n == 0){     
    $_SESSION['debug']= 'is zero';
}
if ($n!==0)
    {
    // стартуем сессию (можно не в начале файла, т.к. никакого вывода в
    //браузер не было)
    session_start();
    $value=mysqli_fetch_array($q);
    // записываем логин и емейл в сессию
    $_SESSION['login']=$value['login'];
   // $_SESSION['email']=$value['email'];
    // редиректим (перенаправляем) на главную страницу сайта
    $_SESSION['message']= 'Вы успешно авторизованы';
    Header("Location: index2.php");
} else {
    $_SESSION['message']= 'Неверный логин/пароль';
    Header("Location: login.php"); // если юзер не найден, то снова на страницу
    //авторизации
}
mysqli_close($conn);
?>