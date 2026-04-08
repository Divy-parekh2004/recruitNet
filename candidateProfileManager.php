<?php
    session_start();
    require_once 'connection.php';

    // Safety check: redirect if no session
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $candidateId = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT * FROM profiles WHERE candidate_id = ?");
    $stmt->execute([$candidateId]);
    $candidate = $stmt->fetch(PDO::FETCH_ASSOC);

    require_once 'header.php';
?>

    <div class="container" style="margin-top: 140px;">
        <div class="row g-5">
            <div class="col-lg-3">
                <div class="sidebar">
                    <h5 class="fw-bold mb-4" style="color: var(--primary-blue);">Manage Account</h5>
                    <ul class="sidebar-menu">
                        <li class="active"><a href="#"><i class="fas fa-user-circle"></i> My Resume</a></li>
                        <li><a href="candidateProfileEdit.php"><i class="fas fa-file-alt"></i> Edit Profile</a></li>
                        <li><a href="forgotPassword.html"><i class="fas fa-key"></i> Password</a></li>
                    </ul>
                    <div class="sign-out">
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">

                <div class="main-content">
                    <h2 class="section-title">My Resume</h2>
                    <div class="profile-header">
                        <img src="uploads/candidate_profile_pic/<?php echo $candidate['profile_pic']; ?>" alt="Profile" class="profile-img">
                        <div class="profile-info">
                            <h2><?php echo htmlspecialchars($candidate['full_name']); ?></h2>
                            <div class="title">
                                <i class="fas fa-briefcase"></i> <?php echo htmlspecialchars($candidate['preferred_role']); ?>
                            </div>
                            <div class="d-flex gap-4 mt-3">
                                <span class="text-muted"><i class="fas fa-map-marker-alt me-2 text-warning"></i><?php echo htmlspecialchars($candidate['location']); ?></span>
                                <span class="text-muted"><i class="fas fa-envelope me-2 text-warning"></i><?php echo htmlspecialchars($candidate['email']); ?></span>
                            </div>
                        </div>
                    </div>

                    <h4 class="fw-bold mb-3" style="color: var(--primary-blue);">About Me</h4>
                    <p class="about-text">
                        <i class="fas fa-quote-left me-2" style="color: var(--accent-orange); opacity: 0.6;"></i>
                        <?php echo nl2br(htmlspecialchars($candidate['summary'])); ?>
                    </p>

                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Work Experience</h4>
                    <div class="exp-card">
                        <div class="exp-title"><?php echo htmlspecialchars($candidate['job_title']); ?></div>
                        <div class="exp-company"><?php echo htmlspecialchars($candidate['company']); ?></div>
                        <div class="exp-date">
                            <i class="far fa-calendar-alt"></i>
                            <?php echo $candidate['exp_from']; ?> - <?php echo !empty($candidate['exp_to']) ? $candidate['exp_to'] : 'Present'; ?>
                        </div>

                        <div class="exp-desc"><p class="exp-text"><?php echo htmlspecialchars($candidate['experience_desc']); ?></p></div>
                        <a href="<?php echo $candidate['portfolio']; ?>" target="_blank" class="project-badge">
                            <i class="far fa-folder-open"></i> View Portfolio
                        </a>
                    </div>

                    <!-- Education -->
                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Education</h4>

                    <div class="edu-card">
                        <div class="edu-degree"><?php echo $candidate['qualification'];?></div>
                        <div class="edu-school"><?php echo $candidate['institute'];?></div>
                        <div class="edu-date"><i class="far fa-calendar-alt"></i>
                            <?php echo $candidate['edu_from']; ?> -
                            <?php echo !empty($candidate['edu_to']) ? $candidate['edu_to'] : 'Present'; ?>
                        </div>
                    </div>

                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Skills</h4>
                    <div class="skills-container">
                        <?php
                            $skills = explode(",", $candidate['skills']);
                            foreach($skills as $skill) {
                                if(!empty(trim($skill))) {
                                    echo '<span class="skill-tag">' . htmlspecialchars(trim($skill)) . '</span>';
                                }
                            }
                        ?>
                    </div>

                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Additional Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <strong>Location:</strong> <span><?php echo htmlspecialchars($candidate['location']); ?></span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-money-bill-wave"></i>
                                <strong>Salary:</strong> <span><?php echo htmlspecialchars($candidate['salary']); ?></span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-briefcase"></i>
                                <strong>Exp:</strong> <span><?php echo htmlspecialchars($candidate['experience']); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="fab fa-linkedin"></i>
                                <strong>LinkedIn:</strong> <span><a href="<?php echo $candidate['linkedin']; ?>" target="_blank">Profile</a></span>
                            </div>
                            <div class="info-item">
                                <i class="fab fa-github"></i>
                                <strong>GitHub:</strong> <span><a href="<?php echo $candidate['portfolio']; ?>" target="_blank">Portfolio/Github</a></span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-file-pdf"></i>
                                <strong>Resume:</strong>
                                <a href="uploads/candidate_resume/<?php echo $candidate['resume']; ?>" target="_blank" >
                                    <?php echo $candidate['full_name']; ?>_resume.pdf
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'footer.php'; ?>
