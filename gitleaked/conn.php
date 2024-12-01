<?php

$host = 'localhost';
$dbname = 'somedatabasename';
$db_username = 'root';
$db_password = 'VerySecurePassword';
$conn = new mysqli($host, $db_username, $db_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

