<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($type === "candidate") {
        $sql = "SELECT * FROM candidates WHERE email = ?";
        $redirect = "candidateHomePage.php";
    } else {
        $sql = "SELECT * FROM companies WHERE email = ?";
        $redirect = "companyHomePage.php";
    }

    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $type;

            header("Location: $redirect");
            exit;
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}
?>