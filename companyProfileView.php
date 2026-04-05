<?php
    require_once "header.php";
    require_once "connection.php";
    session_start();

    $companyId = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT * FROM company_profiles WHERE company_id = ?");
    $stmt->execute([$companyId]);
    $company = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="main-content">
    <section class="company-hero">
        <div class="container">
            <div class="company-hero-card">

                <div class="company-left">
                    <div class="company-logo">
                        <img src="uploads/company_logo/<?php echo $company['logo']; ?>" alt="Company Logo">
                        <!-- <i class="fas fa-building"></i> -->
                    </div>

                    <div>
                        <h1><?php echo $company['company_name']; ?></h1>
                        <p class="company-meta">
                            <i class="fas fa-industry"></i> <?php echo $company['industry']; ?>
                            <span>•</span>
                            <i class="fas fa-users"></i> <?php echo $company['company_size']; ?> employees
                            <span>•</span>
                            <i class="fas fa-map-marker-alt"></i> <?php echo $company['headquarters'];?>
                        </p>
                    </div>
                </div>

                <div class="company-actions">
                    <!-- <a href="#" class="btn-follow">
                        <i class="fas fa-star"></i> Follow
                    </a> -->
                    <a href="#" class="btn-follow">
                        <i class="fas fa-briefcase"></i> View Jobs
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="profile-card">
                        <h3 class="section-title">About <span>Company</span></h3>
                        <p><?php echo $company['about_company']; ?></p>
                    </div>

                    <div class="profile-card">
                        <h3 class="section-title">Work <span>Culture</span></h3>

                        <div class="culture-badges">
                           <?php $culture = explode(",", $company['work_environment']);
                            foreach($culture as $item) { ?>
                                <span class="badge"><?php echo trim($item); ?></span>
                            <?php } ?>
                        </div>

                    </div>

                    <div class="profile-card">
                        <h3 class="section-title">Contact <span>Details</span></h3>

                        <ul class="profile-list">
                            <li><i class="fas fa-envelope"></i><?php echo $company['company_email']; ?></li>
                            <li><i class="fas fa-phone"></i> <?php echo $company['phone']; ?></li>
                            <li><i class="fas fa-globe"></i> <?php echo $company['website']; ?></li>
                        </ul>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="profile-sidebar profile-card">
                        <h4>Company Info</h4>

                        <div class="info-row">
                            <span>Founded</span>
                            <strong><?php echo $company['founded_year']; ?></strong>
                        </div>

                        <div class="info-row">
                            <span>Company Type</span>
                            <strong><?php echo $company['company_type']; ?></strong>
                        </div>

                        <div class="info-row">
                            <span>Office Type</span>
                            <strong><?php echo $company['office_type']; ?></strong>
                        </div>

                        <div class="info-row">
                            <span>Industry</span>
                            <strong><?php echo $company['industry']; ?></strong>
                        </div>

                    </div>

                    <div class="profile-sidebar">
                        <h4>Social Links</h4>

                        <div class="social-links">
                            <a href="<?php echo $company['linkedin']; ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                            <a href="<?php echo $company['website']; ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-globe"></i></a>
                            <a href="<?php echo $company['portfolio']; ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-link"></i></a>
                        </div>

                    </div>

                    <div class="profile-sidebar profile-card mt-4">
                        <h5 class="fw-bold mb-4" style="color: var(--primary-blue);">Manage Account</h5>

                        <ul class="sidebar-menu">
                            <li class="active">
                                <a href="#"><i class="fas fa-user-circle"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="companyProfileEdit.php"><i class="fas fa-file-alt"></i> Manage Profile</a>
                            </li>
                            <li>
                                <a href="forgotPassword.html">
                                    <i class="fas fa-key"></i> Change Password
                                </a>
                            </li>
                        </ul>

                        <div class="sign-out">
                            <a href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Sign Out
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</div>
<?php require_once "footer.php"; ?>