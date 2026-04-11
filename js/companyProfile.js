document.getElementById('companyForm').addEventListener('submit', function (e) {
    let isValid = true;
    clearErrors();

    const fields = this.querySelectorAll('input, textarea, select');
    
    // ✅ Tell JS to force these fields to be required even without the HTML attribute
    const forceRequired = ['website', 'linkedin', 'portfolio'];

    fields.forEach(field => {
        const value = field.value.trim();

        // ✅ Required Check (Checks HTML attribute OR our custom forceRequired list)
        if ((field.hasAttribute('required') || forceRequired.includes(field.name)) && value === '') {
            showError(field, "This field is required");
            isValid = false;
        }

        // Email
        if (field.type === 'email' && value !== '') {
            const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!pattern.test(value)) {
                showError(field, "Invalid email format");
                isValid = false;
            }
        }

        // Phone
        if (field.name === 'phone' && value !== '') {
            const cleaned = value.replace(/\D/g, '');
            if (cleaned.length !== 10 || !/^[6-9]\d{9}$/.test(cleaned)) {
                showError(field, "Enter valid 10-digit Indian mobile number");
                isValid = false;
            }
        }

        // WEBSITE
        if (field.name === 'website' && value !== '') {
            if (!isValidURL(value)) {
                showError(field, "Enter valid website URL (e.g., example.com)");
                isValid = false;
            }
        }

        // LINKEDIN
        if (field.name === 'linkedin' && value !== '') {
            if (!isValidURL(value) || !value.toLowerCase().includes("linkedin.com")) {
                showError(field, "Enter a valid LinkedIn URL");
                isValid = false;
            }
        }

        // PORTFOLIO
        if (field.name === 'portfolio' && value !== '') {
            if (!isValidURL(value)) {
                showError(field, "Enter valid portfolio/product URL");
                isValid = false;
            }
        }

        // Year
        if (field.name === 'founded_year' && value !== '') {
            const year = parseInt(value);
            const currentYear = new Date().getFullYear();

            if (year < 1900 || year > currentYear) {
                showError(field, "Enter valid year");
                isValid = false;
            }
        }

        // GST
        if (field.name === 'gst_number' && value !== '') {
            const gstPattern = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[A-Z0-9]{1}Z[0-9A-Z]{1}$/;
            if (!gstPattern.test(value)) {
                showError(field, "Invalid GST number");
                isValid = false;
            }
        }

        // PAN
        if (field.name === 'pan_number' && value !== '') {
            const panPattern = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            if (!panPattern.test(value)) {
                showError(field, "Invalid PAN format");
                isValid = false;
            }
        }

        // File
        if (field.type === 'file' && field.files.length > 0) {
            const file = field.files[0];
            const allowed = ['image/jpeg', 'image/png', 'image/jpg'];

            if (!allowed.includes(file.type)) {
                showError(field, "Only JPG or PNG images allowed");
                isValid = false;
            }

            if (file.size > 2 * 1024 * 1024) {
                showError(field, "File must be less than 2MB");
                isValid = false;
            }
        }
    });

    if (!isValid) {
        e.preventDefault();
    }
});


// ERROR SHOW (Perfect positioning fixed)
function showError(field, message) {
    field.classList.add("input-error");

    // Remove existing error message exactly next to this specific field
    let oldError = field.nextElementSibling;
    if (oldError && oldError.classList.contains('error-msg')) {
        oldError.remove();
    }

    // Create error element
    let errorDiv = document.createElement('div');
    errorDiv.className = 'error-msg mt-1 text-danger'; 
    errorDiv.style.fontSize = '0.875em';
    errorDiv.innerHTML = `<i class="fas fa-exclamation-circle me-1"></i> ${message}`;

    // Insert directly after the input field
    field.insertAdjacentElement('afterend', errorDiv);
}

// CLEAR ALL
function clearErrors() {
    document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));
    document.querySelectorAll(".error-msg").forEach(el => el.remove());
}

// REAL-TIME CLEAR 
document.querySelectorAll("input, textarea, select").forEach(field => {
    function clearFieldError() {
        this.classList.remove("input-error");
        let error = this.nextElementSibling;
        if (error && error.classList.contains("error-msg")) {
            error.remove();
        }
    }

    field.addEventListener("input", clearFieldError);
    field.addEventListener("change", clearFieldError);
});

// URL VALIDATION
function isValidURL(url) {
    const pattern = /^(https?:\/\/)?([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}(:\d+)?(\/.*)?$/i;
    return pattern.test(url);
}