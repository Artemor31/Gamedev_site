<?php
    session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);
        $query_selector = mysqli_query($connect, "INSERT INTO 'users' ('login', 'email', 'password') VALUES ('$login', '$email', '$password')");
        //$result = mysqli_query($connection, "INSERT INTO `users` (`user_id`, `username`, `passwd`, `email`, `first_name`, `last_name`, `phone`, `city`) VALUES(NULL, '{$login}', '{$password}', '{$email}', '{$first_name}', '{$last_name}', '{$phone}', '{$city}')");
        if(!$query_selector){
            //die('Cannot add user to db');
            echo mysqli_error($connect);
        }

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: signinForm.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: registration.php');
    }

?>