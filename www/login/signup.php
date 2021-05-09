<?php
    session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);
        $query_selector = mysqli_query($connect, "INSERT INTO users VALUES (NULL, '$login', '$email', '$password')");
        //$query_selector = mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, "'.$login.'", "'.$email.'", "'.$password.'")");
        //$result = mysqli_query($connection, "INSERT INTO `users` (`user_id`, `username`, `passwd`, `email`) VALUES(NULL, '{$login}', '{$password}', '{$email}')");
        
        if(!$query_selector){
            echo mysqli_error($connect);
            die('Cannot add user to db');
        }
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: signinForm.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: registration.php');
    }

?>