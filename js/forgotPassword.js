function validateForm(){

    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("new_password").value;
    let confirm = document.getElementById("confirm_password").value;

    let valid = true;

    // Clear previous errors
    document.getElementById("userError").innerHTML = "";
    document.getElementById("passError").innerHTML = "";
    document.getElementById("confirmError").innerHTML = "";

    // Username validation
    if(username === ""){
        document.getElementById("userError").innerHTML = "Username is required";
        valid = false;
    }
    else if(username.length < 4){
        document.getElementById("userError").innerHTML = "Username must be at least 4 characters";
        valid = false;
    }

    // Strong password pattern
    let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).{8,}$/;

    if(password === ""){
        document.getElementById("passError").innerHTML = "Password is required";
        valid = false;
    }
    else if(!passwordPattern.test(password)){
        document.getElementById("passError").innerHTML =
        "Minimum 8 characters, 1 uppercase, 1 lowercase, 1 number & 1 special character";
        valid = false;
    }

    // Confirm password validation
    if(confirm === ""){
        document.getElementById("confirmError").innerHTML = "Please confirm your password";
        valid = false;
    }
    else if(password !== confirm){
        document.getElementById("confirmError").innerHTML = "Passwords do not match";
        valid = false;
    }

    return valid; // Only submit if true
}