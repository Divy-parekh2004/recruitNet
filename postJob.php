<?php
require "connection.php";
session_start();

$companyId = $_SESSION['user_id'];
$stmt  = $conn->prepare("SELECT * FROM companies WHERE id = ?");
$stmt->execute([$companyId]);
$companyData = $stmt->fetch(PDO::FETCH_ASSOC);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$title = $_POST['title'];
$company = $_POST['company'];
$location = $_POST['location'];
$job_type = $_POST['job_type'];
$salary = $_POST['salary'];
$experience = $_POST['experience'];
$skills = $_POST['skills'];
$description = $_POST['description'];
$apply_link = $_POST['apply_link'];
$company_id = $_SESSION['user_id'];
$sql = "INSERT INTO jobs
(company_id, title, company, location, job_type, salary, experience, skills, description, apply_link)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->execute([
    $company_id,
    $title,
    $company,
    $location,
    $job_type,
    $salary,
    $experience,
    $skills,
    $description,
    $apply_link
]);

echo "<script>alert('Job Posted Successfully'); window.location.href='companyHomePage.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post a Job • RecruitNet</title>

    <!-- Bootstrap + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/postJob.css" rel="stylesheet">
</head>

<body>

    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Post a Job • RecruitNet</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="postJob.css" rel="stylesheet">
    
    </head>
    
    <body> -->
    
    <div class="container-fluid">
        <div class="row min-vh-100">
    
            <!-- LEFT SIDE (INFO PANEL) -->
            <div class="col-lg-4 left-panel d-flex flex-column justify-content-center p-5">
                <h1>Post Your Job</h1>
                <p>Reach thousands of candidates and hire faster with RecruitNet.</p>
    
                <div class="tips mt-4">
                    <div><i class="fas fa-check-circle"></i> Clear job title gets 2x applicants</div>
                    <div><i class="fas fa-check-circle"></i> Add skills for better matching</div>
                    <div><i class="fas fa-check-circle"></i> Mention salary to attract talent</div>
                </div>
            </div>
    
            <!-- RIGHT SIDE (FORM) -->
            <div class="col-lg-8 d-flex align-items-center justify-content-center p-4">
    
                <div class="form-card">
    
                    <h3 class="mb-4">Job Details</h3>
    
                    <form action="postJob.php" method="POST">
    
                        <div class="row">
    
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="title" class="form-control" placeholder="Job Title" required>
                                    <label><i class="fas fa-briefcase"></i> Job Title</label>
                                </div>
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="company" class="form-control" value="<?php echo htmlspecialchars($companyData['company_name']); ?>" readonly>
                                    <label><i class="fas fa-building"></i> Company</label>
                                </div>
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                    <label><i class="fas fa-location-dot"></i> Location</label>
                                </div>
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <select name="job_type" class="form-control">
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Internship</option>
                                        <option>Remote</option>
                                    </select>
                                    <label><i class="fas fa-clock"></i> Job Type</label>
                                </div>
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <!-- <input type="text" name="salary" class="form-control" placeholder="Salary">-->
                                    <!-- <label><i class="fas fa-indian-rupee-sign"></i> Salary</label> -->
                                    <select name="salary" class="form-select" placeholder="Salary" required>
                                        <!-- <label><i class="fas fa-indian-rupee-sign"></i> Salary</label> -->
                                        <option value="">Salary</option>
                                        <option value="Negotiable">Negotiable</option>
                                        <option value="₹1-3 LPA">₹1-3 LPA</option>
                                        <option value="₹3-6 LPA">₹3-6 LPA</option>
                                        <option value="₹6-10 LPA">₹6-10 LPA</option>
                                        <option value="₹10+ LPA">₹10+ LPA</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="experience" class="form-control" placeholder="Experience">
                                    <label><i class="fas fa-user-tie"></i> Experience</label>
                                </div>
                            </div>
    
                            <div class="col-12 mb-3">
                                <!-- <div class="form-floating"> -->
                                    <!-- <input type="text" name="skills" class="form-control" placeholder="Skills">
                                    <label><i class="fas fa-code"></i> Skills (comma separated)</label> -->
                                    <div class="skills-wrapper">
                                        <div class="skills-input" id="skillsInput">
                                            <input type="text" id="skillField" placeholder="Type skill and press Enter or Space">
                                        </div>
                                        <input type="hidden" name="skills" id="skillsHidden">
                                    </div>
                                <!-- </div> -->
                            </div>
    
                            <div class="col-12 mb-3">
                                <div class="form-floating">
                                    <textarea name="description" class="form-control" style="height:120px;"></textarea>
                                    <label><i class="fas fa-align-left"></i> Job Description</label>
                                </div>
                            </div>
    
                            <div class="col-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" name="apply_link" class="form-control" placeholder="Apply link">
                                    <label><i class="fas fa-link"></i> Apply Link / Email</label>
                                </div>
                            </div>
    
                        </div>
    
                        <button class="btn-submit w-100">
                            Post Job 🚀
                        </button>
    
                    </form>
    
                </div>
    
            </div>
    
        </div>
    </div>
    <script src="js/postJob.js"></script>
    <!-- </body>
    </html> -->

</body>
</html>