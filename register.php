<?php

function validateRegister($data) {
    $errors = [];

    // Name validation
    if (empty(trim($data['name']))) {
        $errors[] = "Name is required.";
    } elseif (strlen($data['name']) < 3) {
        $errors[] = "Name must be at least 3 characters.";
    }

    // Email validation
    if (empty(trim($data['email']))) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Phone validation
    if (empty(trim($data['phone']))) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^[0-9]{10}$/', $data['phone'])) {
        $errors[] = "Phone must be 10 digits.";
    }

    // Password validation
    if (empty($data['password'])) {
        $errors[] = "Password is required.";
    } elseif (strlen($data['password']) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    } elseif (!preg_match('/[A-Z]/', $data['password'])) {
        $errors[] = "Password must contain at least one uppercase letter.";
    } elseif (!preg_match('/[0-9]/', $data['password'])) {
        $errors[] = "Password must contain at least one number.";
    }

    // Type validation
    if (empty($data['type'])) {
        $errors[] = "User type is required.";
    } elseif (!in_array($data['type'], ['candidate', 'company'])) {
        $errors[] = "Invalid user type.";
    }

    return $errors;
}
?>