<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>RecruitNet • Create Candidate Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/candidateProfile.css">
</head>

<body>

<nav class="navbar fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">Recruit<span>Net</span></a>
        <a href="candidateHomePage.php" class="btn btn-sign">
            <i class="fas fa-arrow-left me-1"></i> Back
        </a>
    </div>
</nav>

<section class="page-header">
    <div class="container">
        <h1>Create Your Professional Profile</h1>
    </div>
</section>

<section class="py-5">
<div class="container">

<form action="validateCandidateProfile.php" method="POST" enctype="multipart/form-data">

<div class="form-card">

<h3 class="section-title">Basic Information</h3>
<div class="row g-4">

<div class="col-md-6">
<label>Full Name</label>
<input type="text" name="full_name" class="form-control" required>
</div>

<div class="col-md-6">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="col-md-6">
<label>Phone Number</label>
<input type="tel" name="phone" class="form-control" required>
</div>

<div class="col-md-6">
<label>Location</label>
<input type="text" name="location" class="form-control" required>
</div>

</div>

<h3 class="section-title mt-4">Summary</h3>
<textarea name="summary" class="form-control" rows="3" required></textarea>

<h3 class="section-title mt-4">Experience</h3>
<div class="row g-4">

<div class="col-md-6">
<label>Job Title</label>
<input type="text" name="job_title" class="form-control" required>
</div>

<div class="col-md-6">
<label>Company</label>
<input type="text" name="company" class="form-control" required>
</div>

<div class="col-md-4">
<label>Experience</label>
<select name="experience" class="form-select" required>
<option value="">Select</option>
<option>Fresher</option>
<option>1-3 years</option>
<option>3-5 years</option>
</select>
</div>

</div>

<h3 class="section-title mt-4">Skills</h3>
<input type="text" name="skills" class="form-control" required>

<h3 class="section-title mt-4">Resume</h3>
<input type="file" name="resume" class="form-control" required>

<div class="text-center mt-4">
<button type="submit" class="btn-save">Submit</button>
</div>

</div>
</form>

</div>
</section>

<script>

// FORM VALIDATION
document.querySelector("form").addEventListener("submit", function(e) {

    let isValid = true;
    clearErrors();

    let fields = document.querySelectorAll("input, textarea, select");

    fields.forEach(field => {
        let value = field.value.trim();

        // REQUIRED
        if (field.hasAttribute("required") && value === "") {
            showError(field, "This field is required");
            isValid = false;
            return;
        }

        // EMAIL
        if (field.type === "email" && value !== "") {
            let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!pattern.test(value)) {
                showError(field, "Invalid email");
                isValid = false;
            }
        }

        // PHONE
        if (field.name === "phone" && value !== "") {
            let cleaned = value.replace(/\D/g, "");
            if (cleaned.length !== 10) {
                showError(field, "Enter valid 10 digit number");
                isValid = false;
            }
        }

        // FILE
        if (field.type === "file" && field.files.length > 0) {
            let file = field.files[0];

            let allowed = [
                "application/pdf",
                "application/msword",
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            ];

            if (!allowed.includes(file.type)) {
                showError(field, "Only PDF/DOC allowed");
                isValid = false;
            }

            if (file.size > 2 * 1024 * 1024) {
                showError(field, "Max size 2MB");
                isValid = false;
            }
        }

    });

    if (!isValid) {
        e.preventDefault();

        let firstError = document.querySelector(".input-error");
        if (firstError) {
            firstError.scrollIntoView({ behavior: "smooth", block: "center" });
        }
    }
});

// SHOW ERROR
function showError(field, message) {
    field.classList.add("input-error");

    let existing = field.parentNode.querySelector(".error-msg");
    if (existing) existing.remove();

    let error = document.createElement("div");
    error.className = "error-msg";
    error.innerHTML = message;

    field.parentNode.appendChild(error);
}

// CLEAR ERRORS
function clearErrors() {
    document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));
    document.querySelectorAll(".error-msg").forEach(el => el.remove());
}

// REAL-TIME FIX
document.querySelectorAll("input, textarea, select").forEach(field => {
    field.addEventListener("input", function () {
        field.classList.remove("input-error");
        let error = field.parentNode.querySelector(".error-msg");
        if (error) error.remove();
    });
});

</script>

</body>
</html>