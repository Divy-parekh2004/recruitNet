<?php
include "connection.php";

$role = $_POST['role'];
$email = $_POST['email'];
$new_password = $_POST['new_password'];

$table = ($role === "candidate") ? "candidates" : "companies";

$sql = "UPDATE $table SET password='$new_password' WHERE email='$email'";

if ($conn->query($sql) && $conn->affected_rows > 0) {
    echo "Password Updated Successfully";
} else {
    echo "Email Not Found";
}
?>