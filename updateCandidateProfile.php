<?php
session_start();
require_once 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['user_id'];

/* -------- ACCOUNT TABLE DATA -------- */
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'] ?? null;

/* -------- PROFILE TABLE DATA -------- */
$location = $_POST['location'];
$summary = $_POST['summary'];
$preferred_role = $_POST['preferred_role'];

$job_title = $_POST['job_title'];
$company = $_POST['company'];
$exp_from = $_POST['exp_from'];
$exp_to = $_POST['exp_to'];
$experience_desc = $_POST['experience_desc'];
$experience = $_POST['experience'];

$qualification = $_POST['qualification'];
$institute = $_POST['institute'];
$edu_from = $_POST['edu_from'];
$edu_to = $_POST['edu_to'];

$skills = $_POST['skills'];

$salary = $_POST['salary'];
$linkedin = $_POST['linkedin'];
$portfolio = $_POST['portfolio'];


/* -------- PROFILE PIC UPLOAD -------- */
if (!empty($_FILES['profile_pic']['name'])) {

    $profilePic = time() . "_" . $_FILES['profile_pic']['name'];
    $target = "uploads/candidate_profile_pic/" . $profilePic;

    move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);

    $conn->prepare("UPDATE profiles SET profile_pic=? WHERE candidate_id=?")
         ->execute([$profilePic, $id]);
}


/* -------- RESUME UPLOAD -------- */
if (!empty($_FILES['resume']['name'])) {

    $resume = time() . "_" . $_FILES['resume']['name'];
    $target = "uploads/candidate_resume/" . $resume;

    move_uploaded_file($_FILES['resume']['tmp_name'], $target);

    $conn->prepare("UPDATE profiles SET resume=? WHERE candidate_id=?")
         ->execute([$resume, $id]);
}


/* -------- UPDATE PROFILES TABLE -------- */
$stmt = $conn->prepare("
UPDATE profiles SET
full_name = ?,
location = ?,
summary = ?,
preferred_role = ?,
job_title = ?,
company = ?,
exp_from = ?,
exp_to = ?,
experience_desc = ?,
experience = ?,
qualification = ?,
institute = ?,
edu_from = ?,
edu_to = ?,
skills = ?,
salary = ?,
linkedin = ?,
portfolio = ?
WHERE candidate_id = ?
");

$stmt->execute([
    $full_name,
    $location,
    $summary,
    $preferred_role,
    $job_title,
    $company,
    $exp_from,
    $exp_to,
    $experience_desc,
    $experience,
    $qualification,
    $institute,
    $edu_from,
    $edu_to,
    $skills,
    $salary,
    $linkedin,
    $portfolio,
    $id
]);


/* -------- UPDATE CANDIDATES TABLE -------- */
$stmt2 = $conn->prepare("
UPDATE candidates SET
name = ?,
email = ?,
phone = ?
WHERE id = ?
");

$stmt2->execute([
    $full_name,
    $email,
    $phone,
    $id
]);


/* -------- REDIRECT -------- */
header("Location: candidateProfileManager.php");
exit;
?>