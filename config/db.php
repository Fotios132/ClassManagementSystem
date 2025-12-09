<?php
$host = 'localhost';
$port = 3307;      
$user = 'root';
$pass = '';         
$db   = 'classmanagementsystem';

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
