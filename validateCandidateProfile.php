<?php
session_start();

$requiredFields = [
    'full_name','email','phone','location','summary',
    'job_title','company','experience','employment_type',
    'notice_period','skills','qualification','institute',
    'preferred_role','preferred_location','salary'
];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        die("<script>alert('All fields are required'); history.back();</script>");
    }
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die("<script>alert('Invalid email address'); history.back();</script>");
}

if (empty($_FILES['resume']['name'])) {
    die("<script>alert('Resume is required'); history.back();</script>");
}

$allowedTypes = ['pdf','doc','docx'];
$ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);

if (!in_array($ext, $allowedTypes)) {
    die("<script>alert('Only PDF/DOC files allowed'); history.back();</script>");
}

$_SESSION['profile_data'] = $_POST;
$_SESSION['resume'] = $_FILES['resume'];

header("Location: insertCandidateProfile.php");
exit;
?>