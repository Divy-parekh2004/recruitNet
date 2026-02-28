<?php
session_start();

$required = [
    'company_name','industry','company_size','founded_year','company_type',
    'about_company','headquarters','office_type','company_email','phone',
    'work_environment','benefits','gst_number'
];

foreach ($required as $field) {
    if (empty($_POST[$field])) {
        die("<script>alert('All required fields must be filled');history.back();</script>");
    }
}

if (!filter_var($_POST['company_email'], FILTER_VALIDATE_EMAIL)) {
    die("<script>alert('Invalid company email');history.back();</script>");
}

if (empty($_FILES['logo']['name'])) {
    die("<script>alert('Company logo is required');history.back();</script>");
}

$ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
if (!in_array($ext, ['jpg','jpeg','png'])) {
    die("<script>alert('Logo must be JPG or PNG');history.back();</script>");
}

$_SESSION['company_data'] = $_POST;
$_SESSION['logo'] = $_FILES['logo'];

header("Location: insertCompanyProfile.php");
exit;
?>