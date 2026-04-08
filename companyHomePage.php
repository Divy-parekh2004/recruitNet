<?php
require_once "header.php";
?>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h6>FOR RECRUITERS & COMPANIES</h6>
                    <h1>Hire the <span>Right Talent</span><br>Faster & Smarter</h1>
                    <p>
                        RecruitNet helps companies connect with verified professionals,
                        reduce hiring time, and build high-performing teams effortlessly.
                    </p>
                    <a href="postJob.php" class="btn-primary-lg">
                        Post a Job →
                    </a>
                </div>
                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <div class="hero-logo-container">
                        <!-- Balloon circles (5 pieces) -->
                        <div class="balloon-circle" style="top: 10%; left: 5%; width: 30px; height: 30px; background: #FF7A3D; animation-delay: 0s;"></div>
                        <div class="balloon-circle" style="top: 60%; left: 80%; width: 45px; height: 45px; background: #0A3B5B; animation-delay: 1.2s;"></div>
                        <div class="balloon-circle" style="top: 20%; left: 70%; width: 25px; height: 25px; background: #FFB347; animation-delay: 0.5s;"></div>
                        <div class="balloon-circle" style="top: 70%; left: 15%; width: 35px; height: 35px; background: #4A90E2; animation-delay: 2s;"></div>
                        <div class="balloon-circle" style="top: 40%; left: 40%; width: 50px; height: 50px; background: #FF7A3D; opacity: 0.2; animation-delay: 0.8s;"></div>

                        <!-- Large floating text logo: RecruitNet -->
                        <div class="floating-text-logo">
                            <span class="recruit-part">Recruit</span><span class="net-part">Net</span>
                        </div>
                    </div>
                    <!-- <i class="fas fa-building" style="font-size:9rem;color:rgba(10,59,91,0.08);"></i> -->
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Companies Choose RecruitNet</h2>
                <p class="text-muted fs-5">Everything you need to hire confidently</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-user-check"></i></div>
                        <h4>Verified Talent</h4>
                        <p>Access candidates screened for skills, experience, and credibility.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Faster Hiring</h4>
                        <p>Reduce hiring cycles with smart job visibility and matching.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>Secure Platform</h4>
                        <p>Your company data and hiring pipeline remain fully protected.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">How Hiring Works</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="step">
                        <span>01</span>
                        <h5>Post a Job</h5>
                        <p class="text-muted">Create a job listing in minutes.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="step">
                        <span>02</span>
                        <h5>Receive Applications</h5>
                        <p class="text-muted">Get matched with relevant candidates.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="step">
                        <span>03</span>
                        <h5>Review Profiles</h5>
                        <p class="text-muted">Evaluate skills and experience.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="step">
                        <span>04</span>
                        <h5>Hire Confidently</h5>
                        <p class="text-muted">Build teams that perform.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TALENT CATEGORIES -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Hire Across Popular Domains</h2>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="category">Software Development</div>
                <div class="category">UI / UX Design</div>
                <div class="category">Marketing</div>
                <div class="category">Data & AI</div>
                <div class="category">Finance</div>
                <div class="category">Operations</div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5">
        <div class="container">
            <div class="cta text-center">
                <h2 class="fw-bold">Ready to Build Your Team?</h2>
                <p class="fs-5 text-muted mt-2">Start hiring top talent today</p>
                <a href="postJob.php" class="btn-primary-lg mt-3">Post Your First Job</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container text-center">
            <p class="mb-0">© 2026 RecruitNet • Built for growing companies</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/companyHomePage.js"></script>
</body>
</html>