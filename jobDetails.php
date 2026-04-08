<?php
require "connection.php";
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

$candidate_id = $_SESSION['user_id'];

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if($id <= 0){
    die("Invalid Job ID");
}

/* Fetch job + company + logo */
$sql = "SELECT 
            j.*, 
            c.company_name,
            cp.logo
        FROM jobs j
        JOIN companies c ON j.company_id = c.id
        LEFT JOIN company_profiles cp ON cp.company_id = c.id
        WHERE j.id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$job = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$job){
    die("Job not found");
}

$company_id = $job['company_id'];

/* check already applied */
$check = $conn->prepare("SELECT id FROM applications 
WHERE job_id=? AND candidate_id=?");
$check->execute([$id,$candidate_id]);
$alreadyApplied = $check->fetch();

/* Apply Logic */
if(isset($_POST['apply_job']) && !$alreadyApplied){

    $insert = $conn->prepare("INSERT INTO applications 
    (job_id,candidate_id,company_id) 
    VALUES (?,?,?)");

    $insert->execute([$id,$candidate_id,$company_id]);

    header("Location: ".$job['apply_link']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo htmlspecialchars($job['title']); ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f7fb;
}

.job-card{
border-radius:20px;
box-shadow:0 10px 30px rgba(0,0,0,0.05);
}

.company-logo{
width:60px;
height:60px;
object-fit:cover;
border-radius:12px;
}

.job-title{
font-weight:700;
color:#333;
}

.job-badges{
display:flex;
gap:10px;
flex-wrap:wrap;
margin-top:10px;
}

.badge-item{
background:#f1f5ff;
padding:6px 14px;
border-radius:20px;
font-size:13px;
}

.section-title{
font-weight:600;
margin-top:20px;
}

.job-text{
color:#555;
line-height:1.6;
}

.apply-btn{
background:#FF7A3D;
color:white;
border:none;
padding:12px 28px;
border-radius:10px;
font-weight:600;
}

.applied-btn{
background:#0A3B5B;
color:white;
border:none;
padding:12px 28px;
border-radius:10px;
cursor:not-allowed;
}

</style>

</head>

<body>

<div class="container mt-5 mb-5">

<div class="card job-card p-4">

<!-- Company Header -->
<div class="d-flex align-items-center mb-4">

<img src="uploads/company_logo/<?php echo $job['logo']; ?>" 
class="company-logo me-3">

<div>
<h5 class="mb-0"><?php echo htmlspecialchars($job['company_name']); ?></h5>
<small class="text-muted"><?php echo htmlspecialchars($job['location']); ?></small>
</div>

</div>

<h2 class="job-title"><?php echo htmlspecialchars($job['title']); ?></h2>

<div class="job-badges">
<span class="badge-item"><?php echo $job['job_type']; ?></span>
<span class="badge-item"><?php echo $job['experience']; ?> yrs</span>
<span class="badge-item">₹ <?php echo $job['salary']; ?></span>
</div>

<hr>

<div class="row">

<div class="col-md-6">
<p><strong>Location</strong><br><?php echo $job['location']; ?></p>
</div>

<div class="col-md-6">
<p><strong>Company</strong><br><?php echo $job['company_name']; ?></p>
</div>

<div class="col-md-6">
<p><strong>Job Type</strong><br><?php echo $job['job_type']; ?></p>
</div>

<div class="col-md-6">
<p><strong>Experience</strong><br><?php echo $job['experience']; ?> Years</p>
</div>

<div class="col-md-6">
<p><strong>Salary</strong><br>₹ <?php echo $job['salary']; ?></p>
</div>

<div class="col-md-6">
<p><strong>Posted</strong><br><?php echo date("d M Y",strtotime($job['created_at'])); ?></p>
</div>

</div>

<hr>

<h5 class="section-title">Skills Required</h5>
<p class="job-text"><?php echo nl2br(htmlspecialchars($job['skills'])); ?></p>

<h5 class="section-title">Job Description</h5>
<p class="job-text"><?php echo nl2br(htmlspecialchars($job['description'])); ?></p>

<form method="POST" class="mt-4">

<?php if($alreadyApplied){ ?>

<button class="applied-btn" disabled>
✓ Applied
</button>

<?php } else { ?>

<button type="submit" name="apply_job" class="apply-btn">
Apply Now
</button>

<?php } ?>

<a href="exploreJob.php" class="btn btn-light ms-2">
Back
</a>

</form>

</div>

</div>

</body>
</html>