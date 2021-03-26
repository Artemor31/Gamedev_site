


<?php
$usernameRegex = '/^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD';
$username = $_POST['name'];

if (!preg_match($usernameRegex, $username)){
}else{
 echo "username ok";
}
?>


<?php
$emailRegex = "/^[a-zA-Zа-яА-ЯёЁ_\d][-a-zA-Zа-яА-ЯёЁ0-9_\.\d]*\@[a-zA-Zа-яА-ЯёЁ\d][-a-zA-Zа-яА-ЯёЁ\.\d]*\.[a-zA-Zа-яА-Я]{2,6}$/i";
$email = $_POST['email'];

if (!preg_match($emailRegex, $email)){
}else{
 echo "email ok";
}
?>


<?php
$numberRegex = "/^[0-9+]/";
$number = $_POST['phone'];

if (!preg_match($numberRegex, $number)){
}else{
 echo "number ok";
}
?>








