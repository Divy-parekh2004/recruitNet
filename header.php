<?php
require_once "connection.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$role = $_SESSION['user_type'] ?? null; // candidate | company | null
$userId = $_SESSION['user_id'] ?? null;
$profileLink = "login.html";
if($role  === 'candidate') {
  $stmt = $conn->prepare("SELECT id FROM profiles WHERE candidate_id = ?");
  $stmt->execute([ $userId]);
  $profileLink = $stmt->rowCount() ? "candidateProfileManager.php" : "candidateProfile.php";
} elseif ($role === 'company') {
  $stmt = $conn->prepare("SELECT id FROM company_profiles WHERE company_id = ?");
  $stmt->execute([ $userId]);
  $profileLink = $stmt->rowCount() ? "companyProfileView.php" : "companyProfile.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecruitNet · Premium with Balloons & Animated Search</title>
  <!-- Bootstrap + Icons + Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/contactUs.css">
  <link rel="stylesheet" href="css/aboutUs.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/candidateProfileManager.css">
  <link rel="stylesheet" href="css/candidateHomePage.css">
  <link rel="stylesheet" href="css/companyHomePage.css">
  <link rel="stylesheet" href="css/companyDashboard.css">
  <link rel="stylesheet" href="css/companyProfileView.css">
  <link rel="stylesheet" href="css/postJob.css">
  <link rel="stylesheet" href="css/editCompanyProfile.css">
  <link rel="stylesheet" href="css/editCandidateProfile.css">
</head>
<body>
  <?php
    $homeLink = "index.php";

    if ($role === "candidate") {
        $homeLink = "candidateHomePage.php";
    } elseif ($role === "company") {
        $homeLink = "companyHomePage.php";
    }
  ?>
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $homeLink;?>">
        <!-- Small RN icon -->
        Recruit<span>Net</span>
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMain">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link home-link" href="<?php echo $homeLink;?>">Home</a></li>
          <!-- Candidate Links -->
          <?php if ($role === "candidate") { ?>
              <li class="nav-item"><a class="nav-link" href="exploreJob.php">Jobs</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Companies</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
          <?php } ?>
          <?php if ($role === "company") { ?>
              <li class="nav-item"><a class="nav-link" href="postJob.php">Post Job</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Talent</a></li>
              <li class="nav-item"><a class="nav-link" href="companyDashboard.php">Dashboard</a></li>
          <?php } ?>

          <li class="nav-item"><a class="nav-link about-link" href="aboutUs.php">About</a></li>
          <li class="nav-item"><a class="nav-link contact-link" href="contactUs.php">Contact</a></li>
        </ul>
        <a href="<?= $profileLink ?>" class="btn btn-sign">
          <i class="far fa-user me-2"></i>
          <?= $role ? "Profile" : "Sign in" ?>
        </a>
      </div>
    </div>
  </nav>