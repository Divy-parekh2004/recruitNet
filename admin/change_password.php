<?php
require_once '../connection.php';

$current = $_POST['current'];
$new = $_POST['new'];

$query = "UPDATE admin SET password='$new' WHERE password='$current'";
mysqli_query($conn,$query);

header("Location: settings.php");