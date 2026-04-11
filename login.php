<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'] ?? '';
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validation
    if (empty($email) || empty($password)) {
        echo "<script>
            window.onload = function() {
                document.getElementById('loginError').style.display = 'block';
                document.querySelector('#loginError span').innerText = 'All fields are required';
            };
        </script>";
        exit;
    }

    // Query based on type
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

    // Check user + password
    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_type'] = $type;

        header("Location: $redirect");
        exit;

    } else {
        // Common error (secure way)
        echo "<script>
            window.onload = function() {
                document.getElementById('loginError').style.display = 'block';
                document.querySelector('#loginError span').innerText = 'Invalid email or password';
            };
        </script>";
    }
}
?>  