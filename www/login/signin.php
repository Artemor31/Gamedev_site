<?php
    session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);


    //$query_selector = mysqli_query($connect, "INSERT INTO users VALUES (NULL, '$login', '$email', '$password')");    
    $check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND `password` = '$password'");
   
    if(!$check_user){
        die('Cannot select user');
    }

    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = 
        [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email']
        ];
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: signinForm.php');
    }
    ?>