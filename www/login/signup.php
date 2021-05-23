<?php
    session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm && strlen($login) > 2 && strlen($password) > 2) 
    {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE login = '$login' AND `email` = '$email'";
        $result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($link)); 

        if($result)
        {         
	    	$count = mysqli_num_rows($result);
            //die($count);
	    	//$rows = mysqli_fetch_all($result, MYSQLI_NUM); 
            if($count > 0)
            {
                $_SESSION['message'] = 'This user already exist!';
                header('Location: registration.php');
            }
            else 
            {
                $query_selector = mysqli_query($connect, "INSERT INTO users VALUES (NULL, '$login', '$email', '$password')");
                
                if(!$query_selector)
                {
                    echo mysqli_error($connect);
                    die('Cannot add user to db');
                }
                $_SESSION['message'] = 'Registration successed!';
                header('Location: signinForm.php');
            }
        }
        else
        {    
            echo mysqli_error($connect);
            die('Cannot add user to db');
        }
    }    
    else
    {
        $_SESSION['message'] = 'Invalid input';
        header('Location: registration.php');
    }  

?>