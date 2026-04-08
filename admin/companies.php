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
<h4>Companies</h4>
</div>

<div class="admin-table">

<table class="table">
<thead>
<tr>
<th>Company</th>
<th>Email</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<tr>
<td>ABC Pvt Ltd</td>
<td>abc@gmail.com</td>
<td>Active</td>
<td>
<button class="btn btn-sm btn-danger">Delete</button>
</td>
</tr>
</tbody>

</table>

</div>
</div>
</body>
</html>