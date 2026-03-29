<?php
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