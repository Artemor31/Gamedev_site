<?php
session_start();
require('../login/connection.php');

$id = $_GET['id'];
$login = $_POST['login'];
$email = $_POST['email'];
$old_password = $_POST['oldpassword'];
$new_password = $_POST['password'];

if($new_password == $old_password)
{
    $query = "UPDATE users SET login = '$login', email = '$email' WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));
}
else
{
    $new_password = md5($new_password);
    $query = "UPDATE users SET login = '$login', email = '$email', password = '$new_password' WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));
}
mysqli_close($connect);
header("Location: adminPanel.php");
exit();
?>