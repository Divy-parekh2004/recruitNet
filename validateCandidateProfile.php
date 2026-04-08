<?php
session_start();

$requiredFields = [
    'full_name','email','phone','location','summary',
    'job_title','company','exp_from','exp_to','experience_desc','employment_type',
    'notice_period','skills','qualification','institute','edu_from' ,'edu_to',
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

if (empty($_FILES['profile_pic']['name'])) {
    die("<script>alert('Profile picture is required'); history.back();</script>");
}

$allowedImgTypes = ['jpg','jpeg','png','webp'];
$imgExt = strtolower(pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION));

if (!in_array($imgExt, $allowedImgTypes)) {
    die("<script>alert('Only JPG, JPEG, PNG, WEBP allowed'); history.back();</script>");
}

// if ($_FILES['profile_pic']['size'] > 5 * 1024 * 1024) {
//     die("<script>alert('Profile image must be less than 2MB'); history.back();</script>");
// }
$resume = $_FILES['resume'];
$resumeName = time() . "_" . $resume['name'];
move_uploaded_file($resume['tmp_name'], "uploads/candidate_resume/" . $resumeName);


$profilePic = $_FILES['profile_pic'];
$profilePicName = time() . "_" . $profilePic['name'];
move_uploaded_file($profilePic['tmp_name'], "uploads/candidate_profile_pic/" . $profilePicName);

$_SESSION['profile_data'] = $_POST;
$_SESSION['resume'] = $_FILES['resume'];
$_SESSION['profile_pic'] = $_FILES['profile_pic'];

header("Location: insertCandidateProfile.php");
exit;
?>