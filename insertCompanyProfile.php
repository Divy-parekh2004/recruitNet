<?php
session_start();
require "connection.php";

$data = $_SESSION['company_data'];
$logo = $_SESSION['logo'];

$logoName = time() . "_" . $logo['name'];
move_uploaded_file($logo['tmp_name'], "companyLogo/" . $logoName);

$sql = "INSERT INTO company_profiles (
    company_name, industry, company_size, founded_year, company_type,
    about_company, headquarters, office_type, company_email, phone,
    website, linkedin, portfolio, work_environment, benefits,
    logo, gst_number, pan_number
) VALUES (
    :company_name, :industry, :company_size, :founded_year, :company_type,
    :about_company, :headquarters, :office_type, :company_email, :phone,
    :website, :linkedin, :portfolio, :work_environment, :benefits,
    :logo, :gst_number, :pan_number
)";

$stmt = $conn->prepare($sql);
$stmt->execute([
    ':company_name' => $data['company_name'],
    ':industry' => $data['industry'],
    ':company_size' => $data['company_size'],
    ':founded_year' => $data['founded_year'],
    ':company_type' => $data['company_type'],
    ':about_company' => $data['about_company'],
    ':headquarters' => $data['headquarters'],
    ':office_type' => $data['office_type'],
    ':company_email' => $data['company_email'],
    ':phone' => $data['phone'],
    ':website' => $data['website'],
    ':linkedin' => $data['linkedin'],
    ':portfolio' => $data['portfolio'],
    ':work_environment' => $data['work_environment'],
    ':benefits' => $data['benefits'],
    ':logo' => $logoName,
    ':gst_number' => $data['gst_number'],
    ':pan_number' => $data['pan_number']
]);

session_destroy();

echo "<script>alert('Company profile created successfully');</script>";
?>