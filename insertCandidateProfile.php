<?php
session_start();
require "connection.php";

$data = $_SESSION['profile_data'];
$resume = $_SESSION['resume'];
$profilePic = $_SESSION['profile_pic'];
$candidateId = $_SESSION['user_id'];

$resumeName = time() . "_" . $resume['name'];
// move_uploaded_file($resume['tmp_name'], "uploads/resume/" . $resumeName);

$profilePicName = time() . "_" . $profilePic['name'];
// move_uploaded_file($profilePic['tmp_name'], "uploads/candidate_profile_pic/" . $profilePicName);

$sql = "INSERT INTO profiles (
    candidate_id, full_name, email, phone, location, summary,
    job_title, company, exp_from, exp_to, experience_desc, experience, employment_type,
    notice_period, skills, qualification, institute, edu_from, edu_to,
    preferred_role, preferred_location, salary,
    linkedin, portfolio, profile_pic, resume
) VALUES (
    :candidate_id, :full_name, :email, :phone, :location, :summary,
    :job_title, :company, :exp_from, :exp_to, :experience_desc, :experience, :employment_type,
    :notice_period, :skills, :qualification, :institute, :edu_from, :edu_to,
    :preferred_role, :preferred_location, :salary,
    :linkedin, :portfolio, :profile_pic, :resume
)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':candidate_id' => $candidateId,
    ':full_name' => $data['full_name'],
    ':email' => $data['email'],
    ':phone' => $data['phone'],
    ':location' => $data['location'],
    ':summary' => $data['summary'],
    ':job_title' => $data['job_title'],
    ':company' => $data['company'],
    ':exp_from' => $data['exp_from'],
    ':exp_to' => $data['exp_to'],
    ':experience_desc' => $data['experience_desc'],
    ':experience' => $data['experience'],
    ':employment_type' => $data['employment_type'],
    ':notice_period' => $data['notice_period'],
    ':skills' => $data['skills'],
    ':qualification' => $data['qualification'],
    ':institute' => $data['institute'],
    ':edu_from' => $data['edu_from'],
    ':edu_to' => $data['edu_to'],
    ':preferred_role' => $data['preferred_role'],
    ':preferred_location' => $data['preferred_location'],
    ':salary' => $data['salary'],
    ':linkedin' => $data['linkedin'],
    ':portfolio' => $data['portfolio'],
    ':profile_pic' => $profilePicName,
    ':resume' => $resumeName
]);

echo "<script>alert('Profile created successfully'); window.location='candidateHomePage.php';</script>";
?>