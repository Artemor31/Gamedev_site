<?php
    $usernameRegex = '/^[a-zA-Zа-яА-ЯёЁ_]/';
    $username = $_POST['name'];
    $emailRegex = "/^[a-zA-Zа-яА-ЯёЁ_\d][-a-zA-Zа-яА-ЯёЁ0-9_\.\d]*\@[a-zA-Zа-яА-ЯёЁ\d][-a-zA-Zа-яА-ЯёЁ\.\d]*\.[a-zA-Zа-яА-Я]{2,6}$/i";
    $email = $_POST['email'];
    $numberRegex = "/^[0-9+]/";
    $number = $_POST['phone'];

    $message = $_POST['message'];

    $isCorrect = false;

    if(!empty($_POST))
    {
        $isCorrect = true;

        if(empty($username))
        {
            $isCorrect = false;
            $name_error = "Enter name!";
        }
        elseif(!preg_match($usernameRegex, $username))
        {
            $isCorrect = false;
            $name_error = "Invalid name!";
        }

        if(empty($email))
        {
            $isCorrect = false;
            $email_error = "Enter email!";
        }
        elseif(!preg_match($emailRegex, $email))
        {
            $isCorrect = false;
            $email_error = "Invalid email!";
        }

        if(empty($number))
        {
            $isCorrect = false;
            $number_error = "Enter number!";
        }
        elseif(!preg_match($numberRegex, $number))
        {
            $isCorrect = false;
            $number_error = "Invalid number!";
        }
        elseif(strlen($number) > 11 || strlen($number) < 6)
        {
            $isCorrect = false;
            $number_error = "Invalid number!";
        }

        if(strlen($message) < 10)
        {
            $isCorrect = false;
        }
    }

    if($isCorrect)
    {
        include('emailSender.php');
    }
    else
    {
        include('ContsctUs.php');
    }

    //include('ContsctUs.php');

    //echo"<p style='color: red;'>Invalid email</p>";
?>







