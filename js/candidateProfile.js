document.getElementById('profileForm').addEventListener('submit', function(e) {

    let isValid = true;
    clearErrors();

    const fields = this.querySelectorAll('input, textarea, select');

    fields.forEach(field => {
        const value = field.value.trim();

        // Required fields
        if (field.hasAttribute('required') && value === '') {
            showError(field, "This field is required");
            isValid = false;
            return;
        }

        // Email validation
        if (field.type === 'email' && value !== '') {
            const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!pattern.test(value)) {
                showError(field, "Invalid email format");
                isValid = false;
            }
        }

        // Phone validation
        if (field.name === 'phone' && value !== '') {
            const cleaned = value.replace(/\D/g, '');
            if (cleaned.length !== 10 || !/^[6-9]\d{9}$/.test(cleaned)) {
                showError(field, "Enter valid 10-digit Indian mobile number");
                isValid = false;
            }
        }

        // URL validation
        if (field.type === 'url' && value !== '') {
            try {
                new URL(value);
            } catch {
                showError(field, "Invalid URL");
                isValid = false;
            }
        }

        // File validation
        if (field.type === 'file' && field.files.length > 0) {
            const file = field.files[0];
            const allowed = [
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ];

            if (!allowed.includes(file.type)) {
                showError(field, "Only PDF or DOC/DOCX files are allowed");
                isValid = false;
            }

            if (file.size > 2 * 1024 * 1024) {
                showError(field, "File size must be less than 2MB");
                isValid = false;
            }
        }
    });

    if (!isValid) {
        e.preventDefault();
    }
});


// ✅ PERFECT ERROR POSITION (FINAL FIX)
function showError(field, message) {
    field.classList.add("input-error");

    // remove old error (only next to field)
    let next = field.nextElementSibling;
    if (next && next.classList.contains('error-msg')) {
        next.remove();
    }

    // create error
    let errorDiv = document.createElement('div');
    errorDiv.className = 'error-msg';
    errorDiv.innerHTML = `<i class="fas fa-exclamation-circle me-1"></i> ${message}`;

    // place directly after input
    field.insertAdjacentElement("afterend", errorDiv);
}


// clear all
function clearErrors() {
    document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));
    document.querySelectorAll(".error-msg").forEach(el => el.remove());
}


// ✅ REAL-TIME CLEAR FIX
document.querySelectorAll("input, textarea, select").forEach(field => {

    function clearFieldError() {
        field.classList.remove("input-error");

        let next = field.nextElementSibling;
        if (next && next.classList.contains('error-msg')) {
            next.remove();
        }
    }

    field.addEventListener("input", clearFieldError);
    field.addEventListener("change", clearFieldError);
});