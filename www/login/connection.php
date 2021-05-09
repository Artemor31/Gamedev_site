<?php

$host = 'localhost'; 
$database = 'lab4DB'; 
$user = 'root'; 
$password = 'root'; 
$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die('Error connect to DataBase');
}

?>