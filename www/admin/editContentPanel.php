<?php
session_start();
require_once '../login/connection.php';

if(!empty($_GET)) 
{
    $id = $_GET['id'];
    $query = "SELECT * FROM pagescontent WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
    {
        $contentData = mysqli_fetch_all($result, MYSQLI_NUM); 
        $contentData = $contentData[0];
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
    <title>Edit content</title>
</head>
<body>
<textarea id="input__text" value="<?= $contentData[2]?>" class="input" name="message" disabled="true" cols="30" rows="8"></textarea>
<textarea id="input__text" value="<?= $contentData[2]?>" class="input" name="message"                 cols="30" rows="8"></textarea>
</body>
</html>