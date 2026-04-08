
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="css/admin.css">

</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="admin-content">

<div class="admin-topbar">
<h4>Settings</h4>
</div>

<div class="row g-3">

<!-- Change Password -->
<div class="col-md-6">
<div class="admin-card">

<h5>Change Password</h5>

<form action="change_password.php" method="POST">

<div class="mb-2">
<label>Current Password</label>
<input type="password" name="current" class="form-control">
</div>

<div class="mb-2">
<label>New Password</label>
<input type="password" name="new" class="form-control">
</div>

<div class="mb-2">
<label>Confirm Password</label>
<input type="password" name="confirm" class="form-control">
</div>

<button class="btn btn-primary mt-2">Update Password</button>

</form>

</div>
</div>

<!-- Logout -->
<div class="col-md-6">
<div class="admin-card text-center">

<h5>Logout</h5>
<p>Click below to logout from admin panel</p>

<a href="adminLogout.php" class="btn btn-danger">Logout</a>

</div>
</div>

</div>

</div>
</body>
</html>