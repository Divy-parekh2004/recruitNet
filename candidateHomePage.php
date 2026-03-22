<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecruitNet • exact Joblet inspired • perfect color</title>
    <!-- Bootstrap 5 + icons + Google Fonts (Poppins + Inter) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- AOS for scroll animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Your existing CSS (no changes) -->
    <link rel="stylesheet" href="css/candidateHomePage.css">
</head>

<body>
    <!-- ========== NAVBAR (Joblet style) ========== -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Recruit<span>Net</span></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Companies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactUs.php">Contact</a></li>
                </ul>
                <a href="#" class="btn btn-sign"><i class="far fa-user me-2"></i>Logout</a>
            </div>
        </div>
    </nav>

    <!-- ========== HERO (exact Joblet match) ========== -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h6><i class="fas fa-bolt me-2" style="color: var(--accent-orange);"></i> Engage & Recruit Top</h6>
                    <h1>Specialists On <span>RecruitNet!</span></h1>
                    <p>We provided lightning-fast and remarkable work solutions.</p>
                    <div class="hero-search">
                        <input type="text" placeholder="Job title, skill or company">
                        <button><i class="fas fa-search me-2"></i>Search</button>
                    </div>
                    <div class="popular-searches">
                        <span>Popular Searches:</span>
                        <a href="#">Developer</a>
                        <a href="#">Designer</a>
                        <a href="#">Marketing</a>
                        <a href="#">Remote</a>
                        <a href="#">AI</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='400' viewBox='0 0 500 400'%3E%3Crect width='500' height='400' fill='%23FF7A3D' opacity='0.1'/%3E%3Ccircle cx='350' cy='150' r='90' fill='%230A3B5B' opacity='0.15'/%3E%3Ccircle cx='120' cy='250' r='110' fill='%23FF7A3D' opacity='0.1'/%3E%3Ctext x='150' y='200' fill='%230A3B5B' font-size='48' font-weight='700' font-family='Poppins'%3ERecruit%3C/text%3E%3Ctext x='230' y='280' fill='%23FF7A3D' font-size='52' font-weight='800' font-family='Poppins'%3ENet%3C/text%3E%3C/svg%3E"
                        class="img-fluid" alt="hero">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVICES (Joblet style) ========== -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Get Appropriate With Solid Development Expertise.</span>
                <h2 class="section-title">RecruitNet Is Your One-Stop Job Consultancy</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-file-signature"></i></div>
                        <h4>Free Job Posting</h4>
                        <p>Unlock opportunities with free posting & connect with top talent effortlessly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                        <h4>Technical Services</h4>
                        <p>From IT support to software development, tailored solutions for your systems.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-headset"></i></div>
                        <h4>24*7 Customer Support</h4>
                        <p>Round-the-clock customer support, always ready to assist you promptly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-users"></i></div>
                        <h4>Human Resources</h4>
                        <p>Tailored HR strategies from recruitment to training, fostering growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== HOW IT WORKS ========== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">How it Works Development Expertise.</span>
                <h2 class="section-title">Simple steps to success</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="50">
                    <div class="step-card">
                        <div class="step-number">01</div>
                        <h5>Complete profile</h5>
                        <p>Enhance your profile with skills</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="step-card">
                        <div class="step-number">02</div>
                        <h5>Create account</h5>
                        <p>Set up your account with ease</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="150">
                    <div class="step-card">
                        <div class="step-number">03</div>
                        <h5>Apply for jobs</h5>
                        <p>Seek opportunities in various fields</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="step-card">
                        <div class="step-number">04</div>
                        <h5>Free job position</h5>
                        <p>Find perfect job for free</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== NEW: FEATURED JOBS SECTION (exactly like image) ========== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-bolt me-2"></i>Acquire Proficiency In Robust Development Job Skills</span>
                <h2 class="section-title">Together with useful notifications, collab insights, and improvement tip etc.</h2>
            </div>

            <div class="row g-4">
                <!-- Job Card 1 -->
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="job-card">
                        <h3 class="job-title">Group Marketing Manager</h3>
                        <div class="job-meta">
                            <span><i class="fas fa-user"></i> John Doe</span>
                            <span><i class="far fa-calendar-alt"></i> Deadline 21st May, 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> London</span>
                        </div>
                        <div class="job-tags">
                            <span class="job-tag">Full Time</span>
                            <span class="job-tag">Part Time</span>
                            <span class="job-tag">Remote</span>
                        </div>
                        <div class="job-salary">$10000 - $12000<span style="font-size:1rem; color:var(--gray-mid);">/month</span></div>
                        <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <!-- Job Card 2 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="job-card">
                        <h3 class="job-title">Sr. Backend Go Developer</h3>
                        <div class="job-meta">
                            <span><i class="fas fa-user"></i> John Doe</span>
                            <span><i class="far fa-calendar-alt"></i> Deadline 31st May, 2024</span>
                            <span><i class="fas fa-map-marker-alt"></i> Dubai</span>
                        </div>
                        <div class="job-tags">
                            <span class="job-tag">Full Time</span>
                            <span class="job-tag">Part Time</span>
                            <span class="job-tag">Remote</span>
                        </div>
                        <div class="job-salary">$10000 - $20000<span style="font-size:1rem; color:var(--gray-mid);">/week</span></div>
                        <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <!-- Job Card 3 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="job-card">
                        <h3 class="job-title">WordPress Developer</h3>
                        <div class="job-meta">
                            <span><i class="fas fa-user"></i> John Doe</span>
                            <span><i class="far fa-calendar-alt"></i> Deadline 20th July, 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> London</span>
                        </div>
                        <div class="job-tags">
                            <span class="job-tag">Full Time</span>
                            <span class="job-tag">Part Time</span>
                            <span class="job-tag">Remote</span>
                        </div>
                        <div class="job-salary">$10000 - $30000<span style="font-size:1rem; color:var(--gray-mid);">/year</span></div>
                        <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <!-- Job Card 4 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="job-card">
                        <h3 class="job-title">Custom Product Manager</h3>
                        <div class="job-meta">
                            <span><i class="fas fa-user"></i> John Doe</span>
                            <span><i class="far fa-calendar-alt"></i> Deadline 13th July, 2025</span>
                            <span><i class="fas fa-map-marker-alt"></i> Los Angeles</span>
                        </div>
                        <div class="job-tags">
                            <span class="job-tag">Full Time</span>
                            <span class="job-tag">Part Time</span>
                            <span class="job-tag">Remote</span>
                        </div>
                        <div class="job-salary">$8000 - $10000<span style="font-size:1rem; color:var(--gray-mid);">/daily</span></div>
                        <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-sign btn-lg">Explore All Job <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ========== TESTIMONIAL ========== -->
    <section class="py-5">
        <div class="container">
            <div class="testimonial-card text-center" data-aos="flip-up">
                <i class="fas fa-quote-right mb-4"></i>
                <p class="fs-3 fw-light fst-italic">"Their Team Is Nothing Short Of Extraordinary. From The Moment We
                    Engaged, Their Commitment To Understanding Our Unique Business Needs Was Evident."</p>
                <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23FF7A3D'/%3E%3Ctext x='30' y='42' font-size='28' text-anchor='middle' fill='%23FFFFFF' font-family='Poppins'%3EA%3C/text%3E%3C/svg%3E"
                        class="rounded-circle" width="60">
                    <div class="text-start">
                        <strong class="fs-5">Alex Sam Martin</strong>
                        <p class="text-muted">Product Lead</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== STATS with counters ========== -->
    <div class="stats-job">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-3 col-6 text-center" data-aos="zoom-in">
                    <div class="stat-number"><span class="counter" data-target="86">0</span>k+</div>
                    <div class="stat-label">clients</div>
                </div>
                <div class="col-md-3 col-6 text-center" data-aos="zoom-in" data-aos-delay="80">
                    <div class="stat-number"><span class="counter" data-target="32">0</span>k</div>
                    <div class="stat-label">jobs posted</div>
                </div>
                <div class="col-md-3 col-6 text-center" data-aos="zoom-in" data-aos-delay="160">
                    <div class="stat-number"><span class="counter" data-target="240">0</span>+</div>
                    <div class="stat-label">industries</div>
                </div>
                <div class="col-md-3 col-6 text-center" data-aos="zoom-in" data-aos-delay="240">
                    <div class="stat-number"><span class="counter" data-target="4.9">0</span>★</div>
                    <div class="stat-label">app rating</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== CTA BANNER ========== -->
    <section class="py-5">
        <div class="container">
            <div class="cta-job d-flex flex-column flex-lg-row align-items-center justify-content-between" data-aos="zoom-in">
                <div>
                    <h2 class="display-5 fw-bold">Start To Find The Job That Fits your life</h2>
                    <p class="fs-4 opacity-75">Get hired in top companies</p>
                </div>
                <button class="btn btn-lg"
                    style="background: var(--primary-blue); color: white; border-radius: 60px; padding: 16px 48px; font-weight: 600;">Get
                    started →</button>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <?php
        require_once 'footer.php';
    ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script src="candidateHomePage.js"></script> -->
</body>

</html>