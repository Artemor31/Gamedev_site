<?php
session_start();

require('../login/connection.php');

if(!empty($_GET)) {

    $id = $_GET['id'];
    $query = "SELECT * FROM emails WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        $count = mysqli_num_rows($result);
        $rows = mysqli_fetch_all($result, MYSQLI_NUM); 
    }
    $row = $rows[0];

    $emailMessage = $row[5].
    "\r\n With pleasure, ".$row[2].
    "\r\n Number: ".$row[4].
    "\r\n Email ".$row[3];


    $to  = "artem.artemov311@gmail.com";        
    $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
    $headers = "Content-Type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: <pixel123.ru> \r\n"; 
    $headers .= "Reply-To: ".$email." \r\n"; 
    mail($to, $subject, $emailMessage, $headers);
}
//header("Location: http://{$_SERVER['HTTP_HOST']}/www/ContsctUs.php?ok=ok");
header("Location: adminPanel.php");
exit();