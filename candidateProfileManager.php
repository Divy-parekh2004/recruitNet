<?php require_once 'header.php'; ?>
    <!-- NAVBAR (JobX style) -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Recruit<span>Net</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="candidateHomePage.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactUs.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn-post" href="#">POST A JOB</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN LAYOUT: sidebar + content -->
    <div class="container" style="margin-top: 140px;">
        <div class="row g-5">
            <!-- SIDEBAR (Manage Account) -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <h5 class="fw-bold mb-4" style="color: var(--primary-blue);">Manage Account</h5>
                    <ul class="sidebar-menu">
                        <li class="active"><a href="#"><i class="fas fa-user-circle"></i> My Resume</a></li>
                        <li><a href="#"><i class="fas fa-file-alt"></i> Manage Applications</a></li>
                       <!--  <li><a href="#"><i class="fas fa-clock"></i> Job Alerts</a></li> -->
                        <li><a href="#"><i class="fas fa-key"></i> Change Password</a></li>
                    </ul>
                    <div class="sign-out">
                        <a href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </div>
                </div>
            </div>

            <!-- MAIN CONTENT (Resume) -->
            <div class="col-lg-9">
                <div class="main-content">
                    <!-- Profile Header with Image -->
                    <div class="profile-header">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Candidate" class="profile-img">
                        <div class="profile-info">
                            <h2>John Doe</h2>
                            <div class="title">
                                <i class="fas fa-briefcase"></i> UI/UX Designer
                            </div>
                            <div class="d-flex gap-3 mt-2">
                                <span><i class="fas fa-map-marker-alt" style="color: var(--accent-orange);"></i> Ahmedabad, India</span>
                                <span><i class="fas fa-envelope" style="color: var(--accent-orange);"></i> john.doe@example.com</span>
                            </div>
                        </div>
                    </div>

                    <h2 class="section-title">My Resume</h2>

                    <!-- About Me (summary) -->
                    <h4 class="fw-bold mb-3" style="color: var(--primary-blue);">About Me</h4>
                    <p class="about-text">
                        <i class="fas fa-quote-left me-2" style="color: var(--accent-orange); opacity: 0.6;"></i>
                        Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur a dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus vilt id, ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est. Sed iaculis Luctus nibh sed venenatis.
                    </p>

                    <!-- Work Experience -->
                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Work Experience</h4>
                    
                    <div class="exp-card">
                        <div class="exp-title">UI/UX Designer</div>
                        <div class="exp-company">BANNANA INC.</div>
                        <div class="exp-date"><i class="far fa-calendar-alt"></i> Feb 2017 - Present (5 years)</div>
                        <p class="exp-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero vero, dolores, officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                        <span class="project-badge"><i class="far fa-folder-open"></i> 4 Projects</span>
                    </div>

                    <div class="exp-card">
                        <div class="exp-title">UI Designer</div>
                        <div class="exp-company">WHALE CREATIVE</div>
                        <div class="exp-date"><i class="far fa-calendar-alt"></i> Feb 2015 - Jan 2017 (2 years)</div>
                        <p class="exp-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero vero, dolores, officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                        <span class="project-badge"><i class="far fa-folder-open"></i> 4 Projects</span>
                    </div>

                    <!-- Education -->
                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Education</h4>

                    <div class="edu-card">
                        <div class="edu-degree">Bachelor of Computer Science</div>
                        <div class="edu-school">Massachusetts Institute Of Technology</div>
                        <div class="edu-date"><i class="far fa-calendar-alt"></i> 2010 - 2014</div>
                    </div>

                    <div class="edu-card">
                        <div class="edu-degree">Bachelor of Computer Science</div>
                        <div class="edu-school">Massachusetts Institute Of Technology</div>
                        <div class="edu-date"><i class="far fa-calendar-alt"></i> 2010 - 2014</div>
                    </div>

                    <!-- Skills -->
                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Skills</h4>
                    <div>
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">React</span>
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Adobe XD</span>
                    </div>

                    <!-- Additional Profile Info -->
                    <h4 class="fw-bold mt-5 mb-4" style="color: var(--primary-blue);">Additional Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <strong>Location:</strong> <span>Ahmedabad, India</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-money-bill-wave"></i>
                                <strong>Salary:</strong> <span>₹6–8 LPA</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-briefcase"></i>
                                <strong>Experience:</strong> <span>5+ years</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="fab fa-linkedin"></i>
                                <strong>LinkedIn:</strong> <span>/in/johndoe</span>
                            </div>
                            <div class="info-item">
                                <i class="fab fa-github"></i>
                                <strong>GitHub:</strong> <span>/johndoe</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-file-pdf"></i>
                                <strong>Resume:</strong> <span>John_Doe_Resume.pdf</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'footer.php'; ?>
</body>