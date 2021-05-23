<?php
    session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $normalpassword = $_POST['password'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM admins WHERE login = '$login' AND `password` = '$normalpassword'";
    $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link));


    if($result)
    {         
        $count = mysqli_num_rows($result);
        if($count > 0)
        {
            $_SESSION['admin'] = true;
            header('Location: ../admin/adminPanel.php');
        }
        else
        {
            $check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND `password` = '$password'");
            if(!$check_user)
            {
                die('Cannot select user');
            }
            if (mysqli_num_rows($check_user) > 0) 
            {
                $user = mysqli_fetch_assoc($check_user);
                $_SESSION['user'] = 
                [   
                    "id" => $user['id'],
                    "login" => $user['login'],
                    "email" => $user['email']
                ];
                header('Location: ../index.php');
            } 
            else 
            {
                $_SESSION['message'] = 'Login or password missmatch :(';
                header('Location: signinForm.php');
            }
        }
    }
?>