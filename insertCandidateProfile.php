<?php
session_start();
require "connection.php";

$data = $_SESSION['profile_data'];
$resume = $_SESSION['resume'];

$resumeName = time() . "_" . $resume['name'];
move_uploaded_file($resume['tmp_name'], "uploads/" . $resumeName);

$sql = "INSERT INTO profiles (
    full_name, email, phone, location, summary,
    job_title, company, experience, employment_type,
    notice_period, skills, qualification, institute,
    preferred_role, preferred_location, salary,
    linkedin, portfolio, resume
) VALUES (
    :full_name, :email, :phone, :location, :summary,
    :job_title, :company, :experience, :employment_type,
    :notice_period, :skills, :qualification, :institute,
    :preferred_role, :preferred_location, :salary,
    :linkedin, :portfolio, :resume
)";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':full_name' => $data['full_name'],
    ':email' => $data['email'],
    ':phone' => $data['phone'],
    ':location' => $data['location'],
    ':summary' => $data['summary'],
    ':job_title' => $data['job_title'],
    ':company' => $data['company'],
    ':experience' => $data['experience'],
    ':employment_type' => $data['employment_type'],
    ':notice_period' => $data['notice_period'],
    ':skills' => $data['skills'],
    ':qualification' => $data['qualification'],
    ':institute' => $data['institute'],
    ':preferred_role' => $data['preferred_role'],
    ':preferred_location' => $data['preferred_location'],
    ':salary' => $data['salary'],
    ':linkedin' => $data['linkedin'],
    ':portfolio' => $data['portfolio'],
    ':resume' => $resumeName
]);

session_destroy();

echo "<script>alert('Profile created successfully'); window.location='candidateHomePage.html';</script>";
?>