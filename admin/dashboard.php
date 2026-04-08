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

<div class="admin-main">

<div class="admin-header">
    <h2>Admin Dashboard</h2>
    <div>Welcome, Admin</div>
</div>

<!-- Stats Cards -->
<div class="admin-cards">

<div class="admin-card">
<h3>120</h3>
<p>Total Candidates</p>
</div>

<div class="admin-card">
<h3>45</h3>
<p>Companies</p>
</div>

<div class="admin-card">
<h3>210</h3>
<p>Jobs Posted</p>
</div>

<div class="admin-card">
<h3>560</h3>
<p>Applications</p>
</div>

</div>


<!-- Charts Row 1 -->
<div class="admin-chart-grid">

<div class="admin-card">
<div class="chart-header">
<h5>Applications per Month</h5>
<a href="applications.php" class="btn-view">View All</a>
</div>
<canvas id="applicationsChart"></canvas>
</div>

<div class="admin-card">
<div class="chart-header">
<h5>Jobs by Category</h5>
<a href="jobs.php" class="btn-view">View All</a>
</div>
<canvas id="jobsChart"></canvas>
</div>

</div>


<!-- Charts Row 2 -->
<div class="admin-chart-grid">

<div class="admin-card">
<div class="chart-header">
<h5>Candidates Growth</h5>
<a href="candidates.php" class="btn-view">View All</a>
</div>
<canvas id="candidateChart"></canvas>
</div>

<div class="admin-card">
<div class="chart-header">
<h5>Companies Joined</h5>
<a href="companies.php" class="btn-view">View All</a>
</div>
<canvas id="companyChart"></canvas>
</div>

</div>

</div>


<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

/* Applications Chart */
new Chart(document.getElementById('applicationsChart'), {
type: 'bar',
data: {
labels: ['Jan','Feb','Mar','Apr','May','Jun'],
datasets: [{
label: 'Applications',
data: [12,19,3,5,8,10],
borderWidth: 1
}]
},
options: { responsive:true }
});


/* Jobs Chart */
new Chart(document.getElementById('jobsChart'), {
type: 'pie',
data: {
labels: ['IT','Finance','Marketing','HR'],
datasets: [{
data: [15,8,10,6]
}]
}
});


/* Candidates Chart */
new Chart(document.getElementById('candidateChart'), {
type: 'line',
data: {
labels: ['Jan','Feb','Mar','Apr','May','Jun'],
datasets: [{
label:'Candidates',
data:[5,10,8,15,12,18],
fill:false,
tension:0.3
}]
}
});


/* Companies Chart */
new Chart(document.getElementById('companyChart'), {
type: 'bar',
data: {
labels:['Jan','Feb','Mar','Apr','May','Jun'],
datasets:[{
label:'Companies',
data:[2,4,3,6,5,7]
}]
}
});

</script>
</body>
</html>
