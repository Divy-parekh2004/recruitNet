<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if ($type === "candidate") {
        $sql = "SELECT * FROM candidates WHERE email='$email'";
        $redirect = "candidateHomePage.html";
    } else {
        $sql = "SELECT * FROM companies WHERE email='$email'";
        $redirect = "CompanyHomePage.html";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

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