<?php
require_once 'connection.php';
session_start();
$candidateId = $_SESSION['user_id'];
$stmt  = $conn->prepare("SELECT * FROM candidates WHERE id = ?");
$stmt->execute([$candidateId]);
$candidateData = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RecruitNet • Create Candidate Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/candidateProfile.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">Recruit<span>Net</span></a>

            <a href="candidateHomePage.php" class="btn btn-sign">
                <i class="fas fa-arrow-left me-1"></i> Back
            </a>

        </div>
    </nav>

    <!-- HEADER -->
    <section class="page-header">
        <div class="container">
            <h1>Create Your Professional Profile</h1>
            <p>
                Recruiters use your profile to evaluate skills, experience, and fit.
                Completing all sections increases visibility and hiring chances.
            </p>
        </div>
    </section>

    <!-- FORM -->
    <section class="py-5">
        <div class="container">

            <!-- ✅ FORM START -->
            <form action="validateCandidateProfile.php" method="POST" enctype="multipart/form-data">
                <div class="form-card">

                    <!-- BASIC INFO -->
                    <h3 class="section-title">Basic Information</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control" value="<?php echo htmlspecialchars($candidateData['name']); ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($candidateData['email']); ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" value="<?php echo htmlspecialchars($candidateData['phone']); ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Current Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Ahmedabad, India" required>
                        </div>
                    </div>

                    <!-- PROFESSIONAL SUMMARY -->
                    <h3 class="section-title mt-5">Professional Summary</h3>
                    <textarea name="summary" class="form-control" rows="4"
                        placeholder="Brief summary highlighting your experience, skills, and career goals..." required></textarea>

                    <!-- EXPERIENCE -->
                    <h3 class="section-title mt-5">Work Experience</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Current Job Title</label>
                            <input type="text" name="job_title" class="form-control" placeholder="Frontend Developer" required>
                        </div>
                        <div class="col-md-6">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control" placeholder="ABC Technologies" required>
                        </div>

                        <div class="col-md-6">
                            <label>From</label>
                            <input type="month" name="exp_from" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label>To</label>
                            <input type="month" name="exp_to" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label>Years of Experience</label>
                            <select name="experience" class="form-select" required>
                                <option value="">Select</option>
                                <option>Fresher</option>
                                <option>1-3 years</option>
                                <option>3-5 years</option>
                                <option>5-8 years</option>
                                <option>8+ years</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Employment Type</label>
                            <select name="employment_type" class="form-select" required>
                                <option value="">Select</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Contract</option>
                                <option>Internship</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Notice Period</label>
                            <select name="notice_period" class="form-select" required>
                                <option value="">Select</option>
                                <option>Immediate</option>
                                <option>15 Days</option>
                                <option>30 Days</option>
                                <option>60 Days</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label>Experience Description</label>
                            <textarea
                                name="experience_desc"
                                class="form-control"
                                rows="4"
                                placeholder="Describe your responsibilities, achievements, technologies used..."
                                required>
                            </textarea>
                        </div>
                    </div>
            
                    <!-- SKILLS -->
                    <h3 class="section-title mt-5">Skills</h3>
                    <!-- <input type="text" name="skills" class="form-control"
                        placeholder="e.g. HTML, CSS, JavaScript, React, PHP" required> -->
                    <div class="skills-wrapper">
                        <div class="skills-input" id="skillsInput">
                            <input type="text" id="skillField" placeholder="Type skill and press Enter or Space">
                        </div>
                        <input type="hidden" name="skills" id="skillsHidden">
                    </div>
                    <!-- EDUCATION -->
                    <h3 class="section-title mt-5">Education</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Highest Qualification</label>
                            <input type="text" name="qualification" class="form-control" placeholder="B.Tech / MCA / MBA" required>
                        </div>
                        <div class="col-md-6">
                            <label>University / Institute</label>
                            <input type="text" name="institute" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>From</label>
                            <input type="month" name="edu_from" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label>To</label>
                            <input type="month" name="edu_to" class="form-control">
                        </div>

                    </div>



                    <!-- PREFERENCES -->
                    <h3 class="section-title mt-5">Job Preferences</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <label>Preferred Role</label>
                            <input type="text" name="preferred_role" class="form-control" placeholder="Frontend Developer" required>
                        </div>
                        <div class="col-md-4">
                            <label>Preferred Location</label>
                            <input type="text" name="preferred_location" class="form-control" placeholder="Remote / Bangalore" required>
                        </div>
                        <div class="col-md-4">
                            <label>Expected Salary</label>
                            <select name="salary" class="form-select" required>
                                <option value="">Select</option>
                                <option value="Negotiable">Negotiable</option>
                                <option value="₹1-3 LPA">₹1-3 LPA</option>
                                <option value="₹3-6 LPA">₹3-6 LPA</option>
                                <option value="₹6-10 LPA">₹6-10 LPA</option>
                                <option value="₹10+ LPA">₹10+ LPA</option>
                            </select>
                            <!-- <input type="text" name="salary" class="form-control" placeholder="₹6–8 LPA" required> -->
                        </div>
                    </div>

                    <!-- SOCIAL LINKS -->
                    <h3 class="section-title mt-5">Profile Links</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>LinkedIn Profile</label>
                            <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/username">
                        </div>
                        <div class="col-md-6">
                            <label>Portfolio / GitHub</label>
                            <input type="url" name="portfolio" class="form-control" placeholder="https://github.com/username">
                        </div>
                    </div>

                    <h3 class="section-title mt-5">Uploads</h3>

                    <div class="row g-4">

                        <!-- PROFILE PIC -->
                        <div class="col-md-6">
                            <div class="upload-box">
                                <i class="fas fa-user-circle fa-2x mb-2"></i>
                                <p class="mb-1 fw-semibold">Upload Profile Picture</p>
                                <input type="file" name="profile_pic" class="form-control mt-2" accept="image/*" required>
                            </div>
                        </div>

                        <!-- RESUME -->
                        <div class="col-md-6">
                            <div class="upload-box">
                                <i class="fas fa-cloud-upload-alt fa-2x mb-2"></i>
                                <p class="mb-1 fw-semibold">Upload Resume (PDF / DOC)</p>
                                <input type="file" name="resume" class="form-control mt-2" required>
                            </div>
                        </div>

                    </div>

                    <!-- SAVE -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn-save">Save & Continue</button>
                    </div>

                </div>

            </form>
            <!-- ✅ FORM END -->

        </div>
    </section>
    <script src="js/candidateProfile.js"></script>
    <!-- FOOTER -->
    <footer class="footer text-center">
        <div class="container">
            © 2026 RecruitNet • Build your career with confidence
        </div>
    </footer>

</body>
</html>