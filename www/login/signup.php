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
        
        if(!$query_selector){
            echo mysqli_error($connect);
            die('Cannot add user to db');
        }
        $_SESSION['message'] = 'Registration successed!';
        header('Location: signinForm.php');

    } else {
        $_SESSION['message'] = 'Password missmatch!';
        header('Location: registration.php');
    }

?>