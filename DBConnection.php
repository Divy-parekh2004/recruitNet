<?php
// db_connect.php
$host = 'localhost';          // your database host
$user = 'root';       // your database username
$pass = '';       // your database password
$db   = 'recruitNet';  // your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>