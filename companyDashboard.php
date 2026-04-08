<?php
require_once "connection.php";
session_start();

$company_id = $_SESSION['user_id'];

/* KPI Data */
$activeJobs = $conn->query("SELECT COUNT(*) FROM jobs WHERE company_id='$company_id' AND status='open'")->fetchColumn();

$applicants = $conn->query("SELECT COUNT(*) FROM applications WHERE company_id='$company_id'")->fetchColumn();

$shortlisted = $conn->query("SELECT COUNT(*) FROM applications WHERE company_id='$company_id' AND status='shortlisted'")->fetchColumn();

$interviews = $conn->query("SELECT COUNT(*) FROM applications WHERE company_id='$company_id' AND status='interview'")->fetchColumn();

/* Jobs Table */
$jobs = $conn->query("
SELECT j.title,j.status,COUNT(a.id) as total
FROM jobs j
LEFT JOIN applications a ON j.id=a.job_id
WHERE j.company_id='$company_id'
GROUP BY j.id
ORDER BY j.created_at DESC
");

/* Recent Applicants */
$recent = $conn->query("
SELECT c.name,j.title
FROM applications a
JOIN candidates c ON a.candidate_id=c.id
JOIN jobs j ON a.job_id=j.id
WHERE a.company_id='$company_id'
ORDER BY a.applied_at DESC
LIMIT 3
");

require_once "header.php";
?>

<!-- HEADER -->
<section class="dashboard-header">
    <div class="container">
        <h1>Welcome back, <span>Acme Corp</span></h1>
        <p class="text-muted fs-5">Here’s what’s happening with your hiring today</p>
    </div>
</section>

<!-- KPI -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="kpi-card">
                    <div>
                        <div class="kpi-value"><?php echo $activeJobs; ?></div>
                        <div class="kpi-label">Active Jobs</div>
                    </div>
                    <div class="kpi-icon"><i class="fas fa-briefcase"></i></div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="kpi-card">
                    <div>
                        <div class="kpi-value"><?php echo $applicants; ?></div>
                        <div class="kpi-label">Applicants</div>
                    </div>
                    <div class="kpi-icon"><i class="fas fa-users"></i></div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="kpi-card">
                    <div>
                        <div class="kpi-value"><?php echo $shortlisted; ?></div>
                        <div class="kpi-label">Shortlisted</div>
                    </div>
                    <div class="kpi-icon"><i class="fas fa-star"></i></div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="kpi-card">
                    <div>
                        <div class="kpi-value"><?php echo $interviews; ?></div>
                        <div class="kpi-label">Interviews</div>
                    </div>
                    <div class="kpi-icon"><i class="fas fa-video"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUICK ACTIONS -->
<section class="pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="action-card">
                    <i class="fas fa-plus-circle"></i>
                    <h5>Post a Job</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="action-card">
                    <i class="fas fa-user-check"></i>
                    <h5>View Applicants</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="action-card">
                    <i class="fas fa-search"></i>
                    <h5>Search Talent</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="action-card">
                    <i class="fas fa-chart-line"></i>
                    <h5>Hiring Analytics</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JOBS + APPLICANTS -->
<section class="pb-5">
    <div class="container">
        <div class="row g-4">

            <!-- JOB TABLE -->
            <div class="col-lg-8">
                <div class="table-card">
                    <h4 class="mb-4">Active Job Listings</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Applicants</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($jobs as $job){ ?>

                            <tr>
                                <td><?php echo $job['title']; ?></td>
                                <td><?php echo $job['total']; ?></td>
                                <td>
                                    <span class="status status-<?php echo strtolower($job['status']); ?>">
                                        <?php echo ucfirst($job['status']); ?>
                                    </span>
                                </td>
                            </tr>

                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- APPLICANTS -->
            <div class="col-lg-4">
                <div class="table-card">
                    <h4 class="mb-4">Recent Applicants</h4>

                    <?php foreach($recent as $row){ ?>
                    <div class="applicant">
                        <div class="avatar">
                            <?php echo strtoupper(substr($row['name'],0,1)); ?>
                        </div>
                        <div>
                            <strong><?php echo $row['name']; ?></strong>
                            <div class="text-muted"><?php echo $row['title']; ?></div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>