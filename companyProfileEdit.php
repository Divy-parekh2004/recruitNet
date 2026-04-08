<?php
require_once "header.php";
require_once "connection.php";
session_start();

$companyId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM company_profiles WHERE company_id = ?");
$stmt->execute([$companyId]);
$company = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST" action="updateCompanyProfile.php" enctype="multipart/form-data">

    <div class="main-content">
        <section class="company-hero">
            <div class="container">
                <div class="company-hero-card">

                    <div class="company-left">

                        <div class="company-logo">
                            <img src="uploads/company_logo/<?php echo $company['logo']; ?>">
                            <input type="file" name="logo" class="edit-input mt-2">
                        </div>

                        <div>
                            <h1>
                                <input type="text" name="company_name"
                                    value="<?php echo $company['company_name']; ?>" class="edit-input">
                                <i class="fas fa-pen edit-icon"></i>
                            </h1>

                            <p class="company-meta">
                                <i class="fas fa-industry"></i>
                                <!-- <input type="text" name="industry"
                                    value="<" class="edit-input"> -->
                                
                                <select name="industry" class="form-select edit-input">
                                    <option value="">Select</option>
                                    <option value="Information Technology" <?= ($company['industry']=='Information Technology')?'selected':'' ?>>Information Technology</option>
                                    <option value="Finance" <?= ($company['industry']=='Finance')?'selected':'' ?>>Finance</option>
                                    <option value="Healthcare" <?= ($company['industry']=='Healthcare')?'selected':'' ?>>Healthcare</option>
                                    <option value="Education" <?= ($company['industry']=='Education')?'selected':'' ?>>Education</option>
                                    <option value="E-commerce" <?= ($company['industry']=='E-commerce')?'selected':'' ?>>E-commerce</option>
                                    <option value="Other" <?= ($company['industry']=='Other')?'selected':'' ?>>Other</option>
                                </select>

                                <span>•</span>

                                <i class="fas fa-users"></i>
                                <!-- <input type="text" name="company_size"
                                    value="<?php echo $company['company_size']; ?>" class="edit-input"> -->

                                <select name="company_size" class="form-select edit-input">
                                    <option <?= ($company['company_size']=='1–10 employees')?'selected':'' ?>>1–10 employees</option>
                                    <option <?= ($company['company_size']=='11–50 employees')?'selected':'' ?>>11–50 employees</option>
                                    <option <?= ($company['company_size']=='51–200 employees')?'selected':'' ?>>51–200 employees</option>
                                    <option <?= ($company['company_size']=='201–500 employees')?'selected':'' ?>>201–500 employees</option>
                                    <option <?= ($company['company_size']=='500+ employees')?'selected':'' ?>>500+ employees</option>
                                </select>

                                <span>•</span>

                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="headquarters"
                                value="<?php echo $company['headquarters'];?>" class="edit-input">
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-8">

                        <div class="profile-card">
                            <h3 class="section-title">About Company</h3>
                            <textarea name="about_company" class="form-control edit-input">
                                <?php echo $company['about_company']; ?>
                            </textarea>
                        </div>

                        <div class="profile-card">
                            <h3 class="section-title">Work <span>Culture</span></h3>

                            <?php $workEnv = $company['work_environment']; ?>

                            <select name="work_environment" class="form-select edit-input" required>
                                <!-- <option value="">Select</option> -->
                                <option value="Fast-paced" <?= ($workEnv == 'Fast-paced') ? 'selected' : '' ?>>Fast-paced</option>
                                <option value="Flexible" <?= ($workEnv == 'Flexible') ? 'selected' : '' ?>>Flexible</option>
                                <option value="Corporate" <?= ($workEnv == 'Corporate') ? 'selected' : '' ?>>Corporate</option>
                                <option value="Startup culture" <?= ($workEnv == 'Startup culture') ? 'selected' : '' ?>>Startup culture</option>
                            </select>
                            <!-- <small class="text-muted">Comma separated values (e.g. Fast-paced, Flexible, Remote)</small> -->
                        </div>

                        <div class="profile-card">
                            <h3 class="section-title">Contact Details</h3>

                            <ul class="profile-list">

                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="company_email"
                                        value="<?php echo $company['company_email']; ?>"
                                        class="edit-input">
                                </li>

                                <li>
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="phone"
                                        value="<?php echo $company['phone']; ?>"
                                        class="edit-input">
                                </li>

                                <li>
                                    <i class="fas fa-globe"></i>
                                    <input type="text" name="website"
                                    value="<?php echo $company['website']; ?>"
                                    class="edit-input">
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="profile-sidebar profile-card">
                            <h4>Company Info</h4>

                            <div class="info-row">
                                <span>Founded</span>
                                <input type="number"
                                    name="founded_year"
                                    value="<?= $company['founded_year'] ?>"
                                    class="edit-input">
                            </div>

                            <div class="info-row">
                                <span>Company Type</span>
                                <select name="company_type" class="form-select edit-input">
                                    <option <?= ($company['company_type']=='Startup')?'selected':'' ?>>Startup</option>
                                    <option <?= ($company['company_type']=='Private')?'selected':'' ?>>Private</option>
                                    <option <?= ($company['company_type']=='Public')?'selected':'' ?>>Public</option>
                                    <option <?= ($company['company_type']=='Enterprise')?'selected':'' ?>>Enterprise</option>
                                </select>
                            </div>

                            <div class="info-row">
                                <span>Office Type</span>
                                <select name="office_type" class="form-select edit-input">
                                    <option <?= ($company['office_type']=='On-site')?'selected':'' ?>>On-site</option>
                                    <option <?= ($company['office_type']=='Remote')?'selected':'' ?>>Remote</option>
                                    <option <?= ($company['office_type']=='Hybrid')?'selected':'' ?>>Hybrid</option>
                                </select>
                            </div>

                            <div class="info-row">
                                <span>Industry</span>
                                <input type="text" name="industry"
                                value="<?php echo $company['industry']; ?>"
                                class="edit-input" readonly>
                            </div>

                        </div>

                        <div class="profile-sidebar">
                            <h4>Social Links</h4>

                            <div class="social-links">
                                <a href="javascript:void(0)" onclick="openSocialEdit('linkedin')">
                                    <i class="fab fa-linkedin"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="openSocialEdit('website')">
                                    <i class="fas fa-globe"></i>
                                </a>

                                <a href="javascript:void(0)" onclick="openSocialEdit('portfolio')">
                                    <i class="fas fa-link"></i>
                                </a>
                            </div>

                            <!-- hidden inputs for form submit -->
                            <input type="hidden" name="linkedin" id="linkedin"
                                value="<?php echo $company['linkedin']; ?>">

                            <input type="hidden" name="website" id="website"
                                value="<?php echo $company['website']; ?>">

                            <input type="hidden" name="portfolio" id="portfolio"
                                value="<?php echo $company['portfolio']; ?>">
                        </div>

                        <div class="profile-sidebar profile-card mt-4">
                            <h5 class="fw-bold mb-4" style="color: var(--primary-blue);">Manage Account</h5>

                            <ul class="sidebar-menu">
                                <li>
                                    <a href="companyProfileView.php"><i class="fas fa-user-circle"></i> My Profile</a>
                                </li>
                                <li class="active">
                                    <a href="#"><i class="fas fa-file-alt"></i> Edit Profile</a>
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

        <div class="text-center mt-5 mb-5">
            <button type="submit" class="btn-save">
                Update & Continue
            </button>
        </div>

    </div>
</form>

<div id="socialModal" class="social-modal">
    <div class="social-modal-content">
        <h5>Edit Link</h5>

        <div class="edit-group">
            <input type="text" id="socialInput" class="form-control">
            <i class="fas fa-pen"></i>
        </div>

        <div class="text-end mt-3">
            <button onclick="closeSocialEdit()" class="btn btn-light">Cancel</button>
            <button onclick="saveSocialEdit()" style="background-color: var(--primary-blue); color:#fff;" class="btn ms-2">
                Confirm
            </button>
        </div>
    </div>
</div>
<script src="js/editCompanyProfile.js"></script>
<?php require_once "footer.php"; ?>