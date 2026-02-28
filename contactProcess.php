<?php
// contact-process.php
require_once 'DBConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];
    if (empty($name)) $errors[] = "name";
    if (empty($email)) $errors[] = "email";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "email_invalid";
    if (empty($message)) $errors[] = "message";

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO contactMessages (full_name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            header("Location: contactUs.php?status=success");
            exit();
        } else {
            error_log("Contact insert error: " . $stmt->error);
            header("Location: contactUs.php?status=error");
            exit();
        }
        $stmt->close();
    } else {
        header("Location: contactUs.php?status=validation_error");
        exit();
    }
} else {
    header("Location: contactUs.php");
    exit();
}
$conn->close();
?>