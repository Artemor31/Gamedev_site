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
<h1>Users</h1>
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
                    <td><a href="editUserForm.php?id=<?php echo $row[0]?>" class="buttons">Edit</a></td>
                    <td><a href="deleteUser.php?id=<?php echo $row[0]?>" class="buttons">Delete</a></td>
                </tr>
        <?php }
            //mysqli_close($connect);
        ?>
</table>
<a href="addUserForm.php" class="buttons">Add user</a>
<h1>Emails</h1>
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
                    <td><a href="deleteMail.php?id=<?php echo $row[0] ?>" class="buttons">Delete</a></td>
                    <td><a href="resendMail.php?id=<?php echo $row[0] ?>" class="buttons">Resend</a></td>
                </tr>
        <?php }
           // mysqli_close($connect);
        ?>
</table>
<h1>Content</h1>
<table>
<tr><th>Id</th><th>Name</th><th>Content</th></tr>
        <?php 
            $query = "SELECT * FROM pagescontent"; 
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
                    <td><a href="deleteContent.php?id=<?php echo $row[0] ?>" class="buttons">Delete</a></td>
                    <td><a href="editContentPanel.php?id=<?php echo $row[0] ?>" class="buttons">Edit</a></td>
                </tr>
        <?php }
            mysqli_close($connect);
        ?>
</table>
</body>
</html>