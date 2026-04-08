<?php
require_once "connection.php";
session_start();

$company_id = $_SESSION['user_id'];

/* Update status */
if(isset($_GET['action'])){
    $job_id = $_GET['job'];
    $status = $_GET['action'];

    $conn->query("UPDATE jobs SET status='$status' WHERE id='$job_id'");
    header("Location: manageJobs.php");
}

/* Jobs */
$jobs = $conn->query("
SELECT j.*, COUNT(a.id) as applicants
FROM jobs j
LEFT JOIN applications a ON j.id=a.job_id
WHERE j.company_id='$company_id'
GROUP BY j.id
");

require_once "header.php";
?>

<section class="pb-5" style="padding: 140px 0 90px;">
<div class="container">
<div class="table-card">
<h4 class="mb-4">Manage Jobs</h4>

<table class="table">
<thead>
<tr>
<th>Role</th>
<th>Applicants</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php foreach($jobs as $job){ ?>
<tr>

<td><?php echo $job['title']; ?></td>

<td><?php echo $job['applicants']; ?></td>

<td>
<span class="status status-<?php echo $job['status']; ?>">
<?php echo ucfirst($job['status']); ?>
</span>
</td>

<td>

<?php if($job['status']=="open"){ ?>

<a href="?action=paused&job=<?php echo $job['id']; ?>" class="btn btn-sm btn-warning">Pause</a>
<a href="?action=closed&job=<?php echo $job['id']; ?>" class="btn btn-sm btn-danger">Close</a>

<?php } elseif($job['status']=="paused"){ ?>

<a href="?action=open&job=<?php echo $job['id']; ?>" class="btn btn-sm btn-success">Resume</a>
<a href="?action=closed&job=<?php echo $job['id']; ?>" class="btn btn-sm btn-danger">Close</a>

<?php } ?>

<a href="jobApplicants.php?job=<?php echo $job['id']; ?>" class="btn btn-sm btn-primary">
View Applicants
</a>

</td>

</tr>
<?php } ?>

</tbody>

</table>

</div>
</div>
</section>