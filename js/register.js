function setRole(role) {
    document.getElementById('userType').value = role;

    document.getElementById('candidateBtn').classList.remove('active');
    document.getElementById('companyBtn').classList.remove('active');

    if (role === 'candidate') {
        document.getElementById('candidateBtn').classList.add('active');
    } else {
        document.getElementById('companyBtn').classList.add('active');
    }
}
document.getElementById("registerForm").addEventListener("submit", function (e) {
    let isValid = true;

    // Clear old errors
    clearErrors();

    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let phone = document.getElementById("phone");
    let password = document.getElementById("password");

    // Name
    if (name.value.trim() === "") {
        showError(name, "Name is required", "nameError");
        isValid = false;
    } else if (name.value.length < 3) {
        showError(name, "Minimum 3 characters required", "nameError");
        isValid = false;
    }

    // Email
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email.value.trim() === "") {
        showError(email, "Email is required", "emailError");
        isValid = false;
    } else if (!email.value.match(emailPattern)) {
        showError(email, "Invalid email format", "emailError");
        isValid = false;
    }

    // Phone
    let phonePattern = /^[0-9]{10}$/;
    if (phone.value.trim() === "") {
        showError(phone, "Phone is required", "phoneError");
        isValid = false;
    } else if (!phone.value.match(phonePattern)) {
        showError(phone, "Enter valid 10-digit number", "phoneError");
        isValid = false;
    }

    // Password
    if (password.value === "") {
        showError(password, "Password is required", "passwordError");
        isValid = false;
    } else if (password.value.length < 6) {
        showError(password, "Minimum 6 characters", "passwordError");
        isValid = false;
    } else if (!/[A-Z]/.test(password.value)) {
        showError(password, "Must contain 1 uppercase letter", "passwordError");
        isValid = false;
    } else if (!/[0-9]/.test(password.value)) {
        showError(password, "Must contain 1 number", "passwordError");
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }
});

function showError(input, message, errorId) {
    input.classList.add("input-error");

    let errorBox = document.getElementById(errorId);
    errorBox.style.display = "block"; // show only on error
    errorBox.querySelector("span").innerText = message;
}

function clearErrors() {
    let inputs = document.querySelectorAll(".form-control");
    inputs.forEach(input => input.classList.remove("input-error"));

    let errorBoxes = document.querySelectorAll("small");
    errorBoxes.forEach(box => {
        box.style.display = "none"; // hide again
        let span = box.querySelector("span");
        if (span) span.innerText = "";
    });
}