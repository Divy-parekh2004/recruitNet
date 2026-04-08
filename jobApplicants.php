<?php
require_once "connection.php";
session_start();

$job_id = $_GET['job'];
$company_id = $_SESSION['user_id'];

/* Update status */
if(isset($_GET['action'])){
    $id = $_GET['id'];
    $status = $_GET['action'];

    $conn->query("UPDATE applications SET status='$status' WHERE id='$id'");
    header("Location: jobApplicants.php?job=".$job_id);
}

/* Applicants */
$applicants = $conn->query("
SELECT a.id,p.full_name,a.status,p.resume,p.skills
FROM applications a
JOIN profiles p ON a.candidate_id=p.candidate_id
WHERE a.job_id='$job_id'
");

require_once "header.php";
?>

<section class="pb-5" style="padding: 140px 0 90px;">
<div class="container">
<div class="table-card">

<h4 class="mb-4">Applicants</h4>

<table class="table">

<thead>
<tr>
<th>Candidate</th>
<th>Resume</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php foreach($applicants as $row){ ?>

<tr>

<td><?php echo $row['full_name']; ?></td>

<td>
<a href="uploads/candidate_resume/<?php echo $row['resume']; ?>" target="_blank">
View
</a>
</td>

<td>
<?php
$skills = explode(",", $row['skills']);
foreach($skills as $skill){
?>
<div class="d-inline-block mb-1">
<span class="skill-tag"><?php echo trim($skill); ?></span>
</div>
<?php } ?>
</td>

<td>
<span class="status status-<?php echo $row['status']; ?>">
<?php echo ucfirst($row['status']); ?>
</span>
</td>

<td>

<a href="?action=shortlisted&id=<?php echo $row['id']; ?>&job=<?php echo $job_id; ?>"
class="btn btn-sm btn-success">Shortlist</a>

<a href="?action=rejected&id=<?php echo $row['id']; ?>&job=<?php echo $job_id; ?>"
class="btn btn-sm btn-danger">Reject</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>
</div>
</section>