<?php
session_start();
require_once 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$candidateId = $_SESSION['user_id'];

$stmt = $conn->prepare("
SELECT c.name, c.email, c.phone, p.*
FROM candidates c
LEFT JOIN profiles p ON c.id = p.candidate_id
WHERE c.id = ?
");
$stmt->execute([$candidateId]);
$candidate = $stmt->fetch(PDO::FETCH_ASSOC);

require_once 'header.php';
?>

<div class="container" style="margin-top: 140px;">
<div class="row g-5">

<!-- SIDEBAR (same as yours) -->
<div class="col-lg-3">
<div class="sidebar">
<h5 class="fw-bold mb-4" style="color: var(--primary-blue);">Manage Account</h5>
<ul class="sidebar-menu">
<li><a href="candidateProfileManager.php"><i class="fas fa-user-circle"></i> My Resume</a></li>
<li class="active"><a href="#"><i class="fas fa-file-alt"></i> Edit Profile</a></li>
<li><a href="forgotPassword.html"><i class="fas fa-key"></i> Password</a></li>
</ul>
<div class="sign-out">
<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
</div>
</div>
</div>

<!-- MAIN CONTENT (REPLACED) -->
<div class="col-lg-9">
<div class="main-content">

<form action="updateCandidateProfile.php" method="POST" enctype="multipart/form-data">

<!-- PROFILE PIC -->
<div class="text-center mb-4">
<div class="profile-wrapper">

<h2 class="section-title mb-4">Edit Profile</h2>
<img src="uploads/candidate_profile_pic/<?=
$candidate['profile_pic'] ?: 'default.png' ?>" alt="Profile" class="profile-img">

<span class="profile-edit" data-bs-toggle="modal" data-bs-target="#profilePicModal">
    <i class="fas fa-pencil-alt"></i>
</span>

</div>
</div>


<!-- PERSONAL INFO -->
<h4 class="fw-bold mb-3" style="color: var(--primary-blue);">Personal Information</h4>

<div class="row g-3">

<div class="col-md-6">
<label class="form-label">Full Name</label>
<input type="text" name="full_name" class="form-control"
value="<?= $candidate['name'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control"
value="<?= $candidate['email'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">Phone</label>
<input type="tel" name="phone" class="form-control"
value="<?= $candidate['phone'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">Location</label>
<input type="text" name="location" class="form-control"
value="<?= $candidate['location'] ?>">
</div>

</div>

<!-- SUMMARY -->
<h4 class="fw-bold mt-5 mb-3" style="color: var(--primary-blue);">Professional Summary</h4>
<label class="form-label">Summary</label>
<textarea name="summary" class="form-control"><?= $candidate['summary'] ?></textarea>

<!-- EXPERIENCE -->
<h4 class="fw-bold mt-5 mb-3" style="color: var(--primary-blue);">Experience</h4>

<div class="row g-3">

<div class="col-md-6">
<label class="form-label">Experience</label>
<select name="experience" class="form-select">
<option <?= ($candidate['experience']=='Fresher')?'selected':'' ?>>Fresher</option>
<option <?= ($candidate['experience']=='1-3 years')?'selected':'' ?>>1-3 years</option>
<option <?= ($candidate['experience']=='3-5 years')?'selected':'' ?>>3-5 years</option>
<option <?= ($candidate['experience']=='5-8 years')?'selected':'' ?>>5-8 years</option>
<option <?= ($candidate['experience']=='8+ years')?'selected':'' ?>>8+ years</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Preferred Role</label>
<input type="text" name="preferred_role" class="form-control"
value="<?= $candidate['preferred_role'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">Job Title</label>
<input type="text" name="job_title" class="form-control"
value="<?= $candidate['job_title'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">Company</label>
<input type="text" name="company" class="form-control"
value="<?= $candidate['company'] ?>">
</div>

</div>

<!-- SKILLS -->
<h4 class="fw-bold mt-5 mb-3" style="color: var(--primary-blue);">Skills</h4>

<div class="tag-input-wrapper d-flex flex-wrap align-items-center gap-2" id="tagWrapper">
    <div id="tagsContainer" class="d-flex flex-wrap align-items-center gap-2"></div>
    <input type="text" id="skillInput" class="flex-fill" placeholder="Type skill and press Enter or Space">
</div>

<input
type="hidden"
name="skills"
id="skillsHidden"
value="<?php echo htmlspecialchars($candidate['skills'] ?? ''); ?>"
>

<!-- ADDITIONAL -->
<h4 class="fw-bold mt-5 mb-3" style="color: var(--primary-blue);">Additional Information</h4>

<div class="row g-3">

<div class="col-md-6">
<label class="form-label">Expected Salary</label>
<input type="text" name="salary" class="form-control"
value="<?= $candidate['salary'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">LinkedIn</label>
<input type="url" name="linkedin" class="form-control"
value="<?= $candidate['linkedin'] ?>">
</div>

<div class="col-md-6">
<label class="form-label">Portfolio / GitHub</label>
<input type="url" name="portfolio" class="form-control"
value="<?= $candidate['portfolio'] ?>">
</div>

</div>

<!-- RESUME -->
<h4 class="fw-bold mt-5 mb-3" style="color: var(--primary-blue);">Resume</h4>

<input type="file" name="resume" class="form-control">
<?php if(!empty($candidate['resume'])): ?>
<div class="mt-2">
<a href="uploads/candidate_resume/<?= $candidate['resume'] ?>"
target="_blank"
class="text-decoration-none resume-link">
<i class="fas fa-file-pdf text-danger"></i>
View Current Resume
</a>
</div>
<?php endif; ?>
<div class="text-center mt-5">
<button class="btn px-5 btn-update" >Update Profile</button>
</div>


</form>

</div>
</div>

</div>
</div>

<!--model for profile pic update-->
<div class="modal fade" id="profilePicModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Update Profile Picture</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body text-center">

<img src="uploads/candidate_profile_pic/<?= !empty($candidate['profile_pic'])
? $candidate['profile_pic']
: 'default.png' ?>"
class="rounded-circle mb-3" width="120">

<input type="file" name="profile_pic" class="form-control">

</div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-primary">Save</button>
</div>

</div>
</div>
</div>

<script src="js/editCandidateProfile.js"></script>
<?php require_once 'footer.php'; ?>