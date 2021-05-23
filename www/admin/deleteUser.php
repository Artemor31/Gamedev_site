<?php
session_start();
include_once "../login/connection.php";

if(!empty($_GET)) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));
}
header("Location: adminPanel.php");
exit();