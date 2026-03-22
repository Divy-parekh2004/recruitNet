<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RecruitNet • Recruiter Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/companyDashboard.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Recruit<span>Net</span></a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Applicants</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
            </ul>
        </div>
    </nav>

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
                            <div class="kpi-value">12</div>
                            <div class="kpi-label">Active Jobs</div>
                        </div>
                        <div class="kpi-icon"><i class="fas fa-briefcase"></i></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="kpi-card">
                        <div>
                            <div class="kpi-value">286</div>
                            <div class="kpi-label">Applicants</div>
                        </div>
                        <div class="kpi-icon"><i class="fas fa-users"></i></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="kpi-card">
                        <div>
                            <div class="kpi-value">38</div>
                            <div class="kpi-label">Shortlisted</div>
                        </div>
                        <div class="kpi-icon"><i class="fas fa-star"></i></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="kpi-card">
                        <div>
                            <div class="kpi-value">9</div>
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
                                <tr>
                                    <td>Frontend Developer</td>
                                    <td>92</td>
                                    <td><span class="status status-open">Open</span></td>
                                </tr>
                                <tr>
                                    <td>Product Manager</td>
                                    <td>61</td>
                                    <td><span class="status status-open">Open</span></td>
                                </tr>
                                <tr>
                                    <td>UI Designer</td>
                                    <td>34</td>
                                    <td><span class="status status-paused">Paused</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- APPLICANTS -->
                <div class="col-lg-4">
                    <div class="table-card">
                        <h4 class="mb-4">Recent Applicants</h4>

                        <div class="applicant">
                            <div class="avatar">A</div>
                            <div>
                                <strong>Arjun Patel</strong>
                                <div class="text-muted">Frontend Developer</div>
                            </div>
                        </div>

                        <div class="applicant">
                            <div class="avatar">S</div>
                            <div>
                                <strong>Sneha Shah</strong>
                                <div class="text-muted">UI Designer</div>
                            </div>
                        </div>

                        <div class="applicant">
                            <div class="avatar">R</div>
                            <div>
                                <strong>Rahul Mehta</strong>
                                <div class="text-muted">Product Manager</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>