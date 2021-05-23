<?php
    session_start();
    //if(!isset($_SESSION['admin'])) die('\_ @_@ _/');
    unset($_SESSION['admin']);
	require('../login/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <p class="users">
        Users: 
    </p>
<table>
<tr><th>Id</th><th>Login</th><th>Email</th></tr>
        <?php 
            $query = "SELECT * FROM users"; 
            $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link)); 
            
            if($result)
            {
                $count = mysqli_num_rows($result);
                $rows = mysqli_fetch_all($result, MYSQLI_NUM); 
            }
            for($i = 0; $i < $count; $i++){
                $row = $rows[$i];
                ?>
                <tr>
                    <td>   <?= $row[0]?></td>
                    <td> | <?= $row[1]?></td>
                    <td> | <?= $row[2]?></td>
                    <td><a href="" class="buttons">Edit</a></td>
                    <td><a href="" class="buttons">Delete</a></td>
                </tr>
        <?php }
            //mysqli_close($connect);
        ?>
</table>

<p>Emails</p>
<table>
<tr><th>Id</th><th>Name</th><th>Email</th><th>Phone</th><th>Text</th></tr>
        <?php 
            $query = "SELECT * FROM emails"; 
            $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link)); 
            
            if($result)
            {
                $count = mysqli_num_rows($result);
                $rows = mysqli_fetch_all($result, MYSQLI_NUM); 
            }
            for($i = 0; $i < $count; $i++){
                $row = $rows[$i];
                ?>
                <tr>
                    <td><?= $row[0]?></td>
                    <td><?= $row[1]?></td>
                    <td><?= $row[2]?></td>
                    <td><?= $row[3]?></td>
                    <td><?= $row[4]?></td>
                    <td><a href="" class="buttons">Edit</a></td>
                    <td><a href="" class="buttons">Delete</a></td>
                </tr>
        <?php }
            mysqli_close($connect);
        ?>
</table>
</body>
</html>