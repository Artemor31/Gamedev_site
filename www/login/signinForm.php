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
    <title>Authorization</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <form action="signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">Submit</button>
        <p>
            Not registered yet? -><a href="registration.php">Registration</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>