<?php
require_once "connection.php";
session_start();

$companyId = $_SESSION['user_id'];

$company_name = $_POST['company_name'];
$email = $_POST['company_email'];
$phone = $_POST['phone'];
$about = $_POST['about_company'];
$website = $_POST['website'];
$industry = $_POST['industry'];
$size = $_POST['company_size'];
$hq = $_POST['headquarters'];
$founded = $_POST['founded_year'];
$type = $_POST['company_type'];
$office = $_POST['office_type'];
$work = $_POST['work_environment'];
$linkedin = $_POST['linkedin'];
$portfolio = $_POST['portfolio'];

if(!empty($_FILES['logo']['name'])){
    $logo = time().'_'.$_FILES['logo']['name'];
    move_uploaded_file($_FILES['logo']['tmp_name'],
        "uploads/company_logo/".$logo);

    $logoSQL=", logo=?";
}else{
    $logoSQL="";
}

$sql="UPDATE company_profiles SET
company_name=?, industry=?,company_size=?,founded_year=?,
company_type=?, about_company=?,headquarters=?,office_type=? ,phone=?,
company_email=?, website=?, linkedin=?, portfolio=? ,work_environment=? $logoSQL
WHERE company_id=?";

if($logoSQL){
    $stmt=$conn->prepare($sql);
    $stmt->execute([
    $company_name,$industry,$size,$founded,
    $type,$about,$hq,$office,$phone,
    $email,$website,$linkedin,$portfolio,$work,$logo,$companyId
]);
} else {
    $stmt=$conn->prepare($sql);
    $stmt->execute([
    $company_name,$industry,$size,$founded,
    $type,$about,$hq,$office,$phone,
    $email,$website,$linkedin,$portfolio,$work,$companyId
]);
}

$stmt=$conn->prepare("UPDATE companies
SET company_name=?, email=?, phone=?
WHERE id=?");

$stmt->execute([$company_name,$email,$phone,$companyId]);

header("Location: companyProfileView.php");
exit();
?>