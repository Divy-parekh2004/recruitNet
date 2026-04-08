<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="admin-sidebar">

<div class="admin-logo">Recruit<span>Net</span></div>
<div class="admin-menu">
<a href="dashboard.php" class="<?= ($current == 'dashboard.php') ? 'active' : '' ?>">
<i class="fas fa-chart-line"></i> Dashboard
</a>

<a href="candidates.php" class="<?= ($current == 'candidates.php') ? 'active' : '' ?>">
<i class="fas fa-user"></i> Candidates
</a>

<a href="companies.php" class="<?= ($current == 'companies.php') ? 'active' : '' ?>">
<i class="fas fa-building"></i> Companies
</a>

<a href="jobs.php" class="<?= ($current == 'jobs.php') ? 'active' : '' ?>">
<i class="fas fa-briefcase"></i> Jobs
</a>

<a href="applications.php" class="<?= ($current == 'applications.php') ? 'active' : '' ?>">
<i class="fas fa-file-alt"></i> Applications
</a>

<a href="settings.php" class="<?= ($current == 'settings.php') ? 'active' : '' ?>">
<i class="fas fa-cog"></i> Settings
</a>

<a href="logout.php">
<i class="fas fa-sign-out-alt"></i> Logout
</a>

</div>
</div>