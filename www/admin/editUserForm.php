<?php
session_start();

require_once '../login/connection.php';
if(!empty($_GET)) 
{
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
    {
        $userData = mysqli_fetch_all($result, MYSQLI_NUM); 
        $userData = $userData[0];
    }
    mysqli_close($connect);
}
else
{
    header("Location: adminPanel.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/login.css">
    <title>Change User</title>
</head>
<body>
<form action="editUser.php?id=<?=$id?>" method="post">

        <label>ID</label>
        <input type="text" name="id" disabled="true" value="<?= $userData[0] ?>">

        <label>Login</label>
        <input type="text" name="login" value="<?= $userData[1] ?>">

        <label>E-mail</label>
        <input type="email" name="email" value="<?= $userData[2] ?>">

        <label>Old password</label>
        <input type="text" name="oldpassword" disabled="true" value="<?= $userData[3] ?>">

        <label>New Password</label>
        <input type="text" name="password" value="<?= $userData[3] ?>">

        <button type="submit">Change</button>
    </form>
</body>
</html>