<?php 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "user";
$dsn = "mysql:host={$host};dbname={$dbname}";

$conn = new PDO($dsn, $user, $password);
$conn->exec("SET time_zone = '+08:00';");

?>