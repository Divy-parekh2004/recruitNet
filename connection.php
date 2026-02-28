<?php
$host = "localhost";
$dbname = "recruitnet";
$username = "root";
$password = "";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ✅ Success message
    echo "Database connection successful";

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
