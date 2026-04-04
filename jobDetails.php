<?php
require "connection.php";

// Get ID safely
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if($id <= 0){
    die("Invalid Job ID");
}

// Fetch job
$sql = "SELECT * FROM jobs WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$job = $stmt->fetch(PDO::FETCH_ASSOC);

// If not found
if(!$job){
    die("Job not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($job['title']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card p-4 shadow">
        
        <h2><?php echo htmlspecialchars($job['title']); ?></h2>
        
        <p><strong>Company:</strong> <?php echo htmlspecialchars($job['company']); ?></p>
        <p><strong>Location:</strong> <?php echo htmlspecialchars($job['location']); ?></p>
        <p><strong>Job Type:</strong> <?php echo $job['job_type']; ?></p>
        <p><strong>Salary:</strong> ₹<?php echo $job['salary']; ?>/month</p>
        <p><strong>Experience:</strong> <?php echo $job['experience']; ?> years</p>
        
        <p><strong>Skills Required:</strong><br>
        <?php echo htmlspecialchars($job['skills']); ?></p>

        <p><strong>Description:</strong><br>
        <?php echo htmlspecialchars($job['description']); ?></p>

        <a href="<?php echo $job['apply_link']; ?>" target="_blank" class="btn btn-success">
            Apply Now
        </a>

        <a href="candidateHomePage.php" class="btn btn-secondary mt-2">
            Back
        </a>

    </div>

</div>

</body>
</html>