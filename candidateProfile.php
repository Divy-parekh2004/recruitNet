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

    <style>
        :root {
            --primary-blue: #0A3B5B;
            --primary-dark: #05273D;
            --accent-orange: #FF7A3D;
            --accent-light: #FFE6DC;
            --gray-light: #F5F7FA;
            --gray-mid: #6C7A8A;
            --white: #ffffff;
            --shadow: 0 20px 35px -10px rgba(10, 59, 91, 0.15);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--gray-light);
            color: #1E2C3A;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Poppins', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            padding: 18px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary-blue) !important;
        }

        .navbar-brand span {
            color: var(--accent-orange);
        }

        /* PAGE HEADER */
        .page-header {
            padding: 120px 0 40px;
            background: linear-gradient(145deg, #ffffff, #f9fbff);
            border-bottom: 1px solid rgba(10, 59, 91, 0.08);
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-blue);
        }

        .page-header p {
            color: var(--gray-mid);
            max-width: 600px;
        }

        /* FORM CARD */
        .form-card {
            background: var(--white);
            border-radius: 30px;
            padding: 3rem;
            box-shadow: var(--shadow);
        }

        .section-title {
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
        }

        label {
            font-weight: 600;
            color: #334;
            margin-bottom: 0.4rem;
        }

        .form-control,
        .form-select {
            border-radius: 14px;
            padding: 14px 16px;
            border: 1px solid #dce3ea;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--accent-orange);
            box-shadow: none;
        }

        textarea {
            resize: none;
        }

        /* UPLOAD */
        .upload-box {
            border: 2px dashed var(--accent-orange);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            background: var(--accent-light);
        }

        /* SAVE BUTTON */
        .btn-save {
            background: var(--accent-orange);
            color: white;
            border: none;
            border-radius: 60px;
            padding: 16px 48px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-save:hover {
            background: var(--primary-blue);
        }

        /* FOOTER */
        .footer {
            background: var(--primary-dark);
            color: #c3d4e3;
            padding: 40px 0;
            margin-top: 80px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Recruit<span>Net</span></a>
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
                            <input type="text" name="full_name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="john@email.com" required>
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
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
                    </div>
            
                    <!-- SKILLS -->
                    <h3 class="section-title mt-5">Skills</h3>
                    <input type="text" name="skills" class="form-control"
                        placeholder="e.g. HTML, CSS, JavaScript, React, PHP" required>
            
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
                            <input type="text" name="salary" class="form-control" placeholder="₹6–8 LPA" required>
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
            
                    <!-- RESUME -->
                    <h3 class="section-title mt-5">Resume Upload</h3>
                    <div class="upload-box">
                        <i class="fas fa-cloud-upload-alt fa-2x mb-2"></i>
                        <p class="mb-1 fw-semibold">Upload Resume (PDF / DOC)</p>
                        <input type="file" name="resume" class="form-control mt-2" required>
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

    <!-- FOOTER -->
    <footer class="footer text-center">
        <div class="container">
            © 2026 RecruitNet • Build your career with confidence
        </div>
    </footer>

</body>
</html>