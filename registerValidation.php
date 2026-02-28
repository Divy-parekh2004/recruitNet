<?php
function validateRegister($data) {
    $errors = [];

    if (empty($data['name'])) {
        $errors[] = "Name is required";
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (strlen($data['password']) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }

    if ($data['type'] !== 'candidate' && $data['type'] !== 'company') {
        $errors[] = "Invalid user type";
    }

    return $errors;
}
?>