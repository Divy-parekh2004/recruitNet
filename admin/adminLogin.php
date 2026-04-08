<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="../css/index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>

.admin-login-wrapper{
height:100vh;
display:flex;
align-items:center;
justify-content:center;
background:linear-gradient(135deg,#F9FBFF,#fff);
}

.admin-login-card{
width:400px;
background:white;
padding:35px;
border-radius:24px;
box-shadow:var(--shadow-job);
}

.admin-login-card h3{
color:var(--primary-blue);
font-weight:700;
margin-bottom:20px;
}

.admin-login-btn{
width:100%;
background:var(--accent-orange);
border:none;
padding:12px;
border-radius:50px;
color:white;
font-weight:600;
}

</style>
</head>

<body>

<div class="admin-login-wrapper">
<div class="admin-login-card">

<h3 class="text-center">Admin Login</h3>

<form action="login_process.php" method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button class="admin-login-btn">Login</button>

</form>

</div>
</div>

</body>
</html>