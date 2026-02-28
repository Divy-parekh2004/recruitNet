<?php
include "connection.php";
include "registerValidation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];

    // validation
    $errors = validateRegister($_POST);
    if (!empty($errors)) {
        echo implode("<br>", $errors);
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($type === "candidate") {
        $sql = "INSERT INTO candidates (name, email, phone, password)
                VALUES ('$name', '$email', '$phone', '$hashedPassword')";
    } else {
        $sql = "INSERT INTO companies (company_name, email, phone, password)
                VALUES ('$name', '$email', '$phone', '$hashedPassword')";
    }

    if ($conn->query($sql)) {
        header("Location: login.html");
        exit;
    } else {
        echo "Database error: " . $conn->error;
    }
}
?>