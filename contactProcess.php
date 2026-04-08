<?php
// contact-process.php
require_once 'connection.php';

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
        $stmt = $conn->prepare("INSERT INTO contact_messages (full_name, email, subject, message) VALUES (?, ?, ?, ?)");

        if ($stmt->execute([$name, $email, $subject, $message])) {
            header("Location: contactUs.php?status=success");
            exit();
        } else {
            error_log("Contact insert error: " . implode(" ", $stmt->errorInfo()));
            header("Location: contactUs.php?status=error");
            exit();
        }
    } else {
        header("Location: contactUs.php?status=validation_error");
        exit();
    }
} else {
    header("Location: contactUs.php");
    exit();
}
?>