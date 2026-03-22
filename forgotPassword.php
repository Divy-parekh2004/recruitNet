<?php
include "connection.php";

$role = $_POST['role'];
$email = $_POST['email'];
$new_password = $_POST['new_password'];

$table = ($role === "candidate") ? "candidates" : "companies";

$sql = "UPDATE $table SET password = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$new_password, $email]);

if ($stmt->rowCount() > 0) {
    echo "Password Updated Successfully";
} else {
    echo "Email Not Found";
}
?>