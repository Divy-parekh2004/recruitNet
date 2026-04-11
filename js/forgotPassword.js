function validateForm() {
    let isValid = true;

    // 1. Get input elements
    const username = document.getElementById('username');
    const newPassword = document.getElementById('new_password');
    const confirmPassword = document.getElementById('confirm_password');

    // 2. Get error display elements
    const userError = document.getElementById('userError');
    const passError = document.getElementById('passError');
    const confirmError = document.getElementById('confirmError');

    // 3. Clear existing errors before re-validating
    userError.innerHTML = "";
    passError.innerHTML = "";
    confirmError.innerHTML = "";

    // 🔴 This is the icon we will attach to every error
    const icon = '<i class="fas fa-exclamation-circle me-1"></i>';

    // 4. Validate Username
    if (username.value.trim() === "") {
        userError.innerHTML = `${icon} Username is required`;
        userError.classList.add("text-danger"); // Standard bootstrap red
        userError.style.fontSize = "0.875em";
        isValid = false;
    }

    // 5. Validate New Password
    if (newPassword.value.trim() === "") {
        passError.innerHTML = `${icon} New password is required`;
        passError.classList.add("text-danger");
        passError.style.fontSize = "0.875em";
        isValid = false;
    } else if (newPassword.value.length < 8) {
        passError.innerHTML = `${icon} Password must be at least 8 characters long`;
        passError.classList.add("text-danger");
        passError.style.fontSize = "0.875em";
        isValid = false;
    }

    // 6. Validate Confirm Password
    if (confirmPassword.value.trim() === "") {
        confirmError.innerHTML = `${icon} Please confirm your password`;
        confirmError.classList.add("text-danger");
        confirmError.style.fontSize = "0.875em";
        isValid = false;
    } else if (confirmPassword.value !== newPassword.value) {
        confirmError.innerHTML = `${icon} Passwords do not match`;
        confirmError.classList.add("text-danger");
        confirmError.style.fontSize = "0.875em";
        isValid = false;
    }

    // 7. Prevent form submission if any check failed
    return isValid; 
}

// REAL-TIME CLEAR: Remove the error message as soon as the user starts typing
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', function() {
        const errorDiv = this.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error')) {
            errorDiv.innerHTML = '';
        }
    });
});