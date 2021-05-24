<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add user</title>
    <link rel="stylesheet" href="../login/login.css">
</head>
<body>

    <form action="addUser.php" method="post">

        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login...">

        <label>E-mail</label>
        <input type="email" name="email" placeholder="Enter e-mail...">

        <label>Password</label>
        <input type="password" name="password" placeholder="Password...">

        <button type="submit">Submit</button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>