<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskProtocol";

$conn = new mysqli("localhost", "root", "", "taskProtocol");

if($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
