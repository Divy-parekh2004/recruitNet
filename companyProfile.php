<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RecruitNet • Create Company Profile</title>
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

        /* HEADER */
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
            max-width: 700px;
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
            padding: 16px 52px;
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
            <h1>Create Your Company Profile</h1>
            <p>
                Your company profile helps candidates understand your brand, culture, and opportunities.
                A complete profile builds trust and attracts better talent.
            </p>
        </div>
    </section>

    <!-- FORM -->
    <section class="py-5">
        <div class="container">

            <form action="validateCompanyProfile.php" method="POST" enctype="multipart/form-data">

                <div class="form-card">

                    <!-- BASIC COMPANY INFO -->
                    <h3 class="section-title">Company Information</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Company Name</label>
                            <input type="text" name="company_name" class="form-control"
                                placeholder="ABC Technologies Pvt Ltd" required>
                        </div>
                        <div class="col-md-6">
                            <label>Industry</label>
                            <select name="industry" class="form-select" required>
                                <option value="">Select</option>
                                <option>Information Technology</option>
                                <option>Finance</option>
                                <option>Healthcare</option>
                                <option>Education</option>
                                <option>E-commerce</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Company Size</label>
                            <select name="company_size" class="form-select" required>
                                <option value="">Select</option>
                                <option>1–10 employees</option>
                                <option>11–50 employees</option>
                                <option>51–200 employees</option>
                                <option>201–500 employees</option>
                                <option>500+ employees</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Founded Year</label>
                            <input type="number" name="founded_year" class="form-control" placeholder="2015" required>
                        </div>
                        <div class="col-md-4">
                            <label>Company Type</label>
                            <select name="company_type" class="form-select" required>
                                <option value="">Select</option>
                                <option>Startup</option>
                                <option>Private</option>
                                <option>Public</option>
                                <option>Enterprise</option>
                            </select>
                        </div>
                    </div>

                    <!-- ABOUT COMPANY -->
                    <h3 class="section-title mt-5">About Company</h3>
                    <textarea name="about_company" class="form-control" rows="5"
                        placeholder="Describe what your company does, your mission, products or services..."
                        required></textarea>

                    <!-- LOCATION -->
                    <h3 class="section-title mt-5">Company Location</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Headquarters Location</label>
                            <input type="text" name="headquarters" class="form-control"
                                placeholder="Ahmedabad, India" required>
                        </div>
                        <div class="col-md-6">
                            <label>Office Type</label>
                            <select name="office_type" class="form-select" required>
                                <option value="">Select</option>
                                <option>On-site</option>
                                <option>Remote</option>
                                <option>Hybrid</option>
                            </select>
                        </div>
                    </div>

                    <!-- CONTACT -->
                    <h3 class="section-title mt-5">Contact Details</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Company Email</label>
                            <input type="email" name="company_email" class="form-control"
                                placeholder="hr@company.com" required>
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control"
                                placeholder="+91 98765 43210" required>
                        </div>
                        <div class="col-md-6">
                            <label>Website</label>
                            <input type="url" name="website" class="form-control"
                                placeholder="https://www.company.com">
                        </div>
                    </div>

                    <!-- SOCIAL LINKS -->
                    <h3 class="section-title mt-5">Social & Branding Links</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>LinkedIn Page</label>
                            <input type="url" name="linkedin" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Company Portfolio / Product Page</label>
                            <input type="url" name="portfolio" class="form-control">
                        </div>
                    </div>

                    <!-- WORK CULTURE -->
                    <h3 class="section-title mt-5">Work Culture & Benefits</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>Work Environment</label>
                            <select name="work_environment" class="form-select" required>
                                <option value="">Select</option>
                                <option>Fast-paced</option>
                                <option>Flexible</option>
                                <option>Corporate</option>
                                <option>Startup culture</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Employee Benefits</label>
                            <input type="text" name="benefits" class="form-control"
                                placeholder="Health insurance, flexible hours, remote work" required>
                        </div>
                    </div>

                    <!-- LOGO -->
                    <h3 class="section-title mt-5">Company Logo</h3>
                    <div class="upload-box">
                        <i class="fas fa-building fa-2x mb-2"></i>
                        <p class="fw-semibold mb-1">Upload Company Logo</p>
                        <input type="file" name="logo" class="form-control mt-2" required>
                    </div>

                    <!-- VERIFICATION -->
                    <h3 class="section-title mt-5">Verification Details</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label>GST / Registration Number</label>
                            <input type="text" name="gst_number" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Company PAN (optional)</label>
                            <input type="text" name="pan_number" class="form-control">
                        </div>
                    </div>

                    <!-- SAVE -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn-save">Save Company Profile</button>
                    </div>

                </div>

            </form>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer text-center">
        <div class="container">
            © 2026 RecruitNet • Trusted hiring starts with transparency
        </div>
    </footer>

</body>
</html>