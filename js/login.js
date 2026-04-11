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
document.getElementById("loginForm").addEventListener("submit", function (e) {
    let isValid = true;
    clearErrors();

    let email = document.getElementById("email");
    let password = document.getElementById("password");

    // Email validation
    if (email.value.trim() === "") {
        showError(email, "Email is required", "emailError");
        isValid = false;
    }

    // Password validation
    if (password.value.trim() === "") {
        showError(password, "Password is required", "passwordError");
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }
});

function showError(input, message, errorId) {
    input.classList.add("input-error");

    let box = document.getElementById(errorId);
    box.style.display = "block";
    box.querySelector("span").innerText = message;
}

function showLoginError(message) {
    let box = document.getElementById("loginError");
    box.style.display = "block";
    box.querySelector("span").innerText = message;
}

function clearErrors() {
    document.querySelectorAll(".form-control").forEach(input => {
        input.classList.remove("input-error");
    });

    document.querySelectorAll("small").forEach(box => {
        box.style.display = "none";
        let span = box.querySelector("span");
        if (span) span.innerText = "";
    });
}