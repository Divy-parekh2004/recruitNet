<?php
require_once 'header.php';
?>
<!-- HOME PAGE -->
<div id="home-page">
  <!-- Hero with floating logo + balloon circles + animated search -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7" data-aos="fade-right">
          <h6><i class="fas fa-bolt me-2" style="color: var(--accent-orange);"></i> Engage & Recruit Top</h6>
          <h1>Specialists On <span>RecruitNet!</span></h1>
          <p class="lead mb-4">Lightning‑fast, remarkable work solutions.</p>

          <!-- ANIMATED SEARCH AREA -->
          <div class="hero-search">
            <input type="text" placeholder="Job title, skill or company" class="search-input">
            <button class="search-btn"><a href="register.html" style="text-decoration: none;color:white"><i class="fas fa-search me-2"></i>Search</a></button>
          </div>
          <div class="popular-searches">
            <span>Popular:</span>
            <a href="#" class="tag">Developer</a>
            <a href="#" class="tag">Designer</a>
            <a href="#" class="tag">Marketing</a>
            <a href="#" class="tag">Remote</a>
            <a href="#" class="tag">AI</a>
          </div>
        </div>
        <div class="col-lg-5" data-aos="fade-left">
          <!-- FLOATING FULL‑NAME LOGO + BALLOON CIRCLES -->
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
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="section-padding">
    <div class="container">
      <div class="text-center" data-aos="fade-up">
        <!--  <span class="section-subtitle">What we offer</span> -->
        <h2 class="section-title">Your One‑Stop <span>Job Consultancy</span></h2>
      </div>
      <div class="row g-3 mt-3">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
          <div class="service-card">
            <div class="service-icon"><i class="fas fa-file-signature"></i></div>
            <h4>Free Job Posting</h4>
            <p>Connect with top talent effortlessly.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="service-card">
            <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
            <h4>Technical Services</h4>
            <p>Tailored IT & development.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
          <div class="service-card">
            <div class="service-icon"><i class="fas fa-headset"></i></div>
            <h4>24/7 Support</h4>
            <p>Round‑the‑clock customer care.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="service-card">
            <div class="service-icon"><i class="fas fa-users"></i></div>
            <h4>Human Resources</h4>
            <p>Tailored HR strategies.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="section-padding bg-light">
    <div class="container">
      <div class="text-center" data-aos="fade-up">
        <!--  <span class="section-subtitle">Simple process</span> -->
        <h2 class="section-title">Steps to <span>Success</span></h2>
      </div>
      <div class="row g-3 mt-3">

        <div class="col-md-3 col-6" data-aos="zoom-in">
          <a href="register.html" style="text-decoration:none; color:inherit;">
            <div class="step-card">
              <div class="step-number">01</div>
              <h5>Complete profile</h5>
              <p>Enhance with skills</p>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
          <a href="register.html" style="text-decoration:none; color:inherit;">
            <div class="step-card">
              <div class="step-number">02</div>
              <h5>Create account</h5>
              <p>Easy setup</p>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="150">
          <a href="register.html" style="text-decoration:none; color:inherit;">
            <div class="step-card">
              <div class="step-number">03</div>
              <h5>Apply for jobs</h5>
              <p>Seek opportunities</p>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
          <a href="register.html" style="text-decoration:none; color:inherit;">
            <div class="step-card">
              <div class="step-number">04</div>
              <h5>Free position</h5>
              <p>Find perfect job</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="section-padding bg-light">
    <div class="container">
      <div class="testimonial-card text-center" data-aos="flip-up">
        <i class="fas fa-quote-right mb-4"></i>
        <p class="fs-4 fst-italic">"Their team is nothing short of extraordinary. Commitment to understanding our unique needs was evident."</p>
        <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
          <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23FF7A3D'/%3E%3Ctext x='30' y='42' font-size='28' text-anchor='middle' fill='%23FFFFFF' font-family='Poppins'%3EA%3C/text%3E%3C/svg%3E" class="rounded-circle" width="60">
          <div class="text-start"><strong class="fs-5">Alex Sam Martin</strong>
            <p class="text-muted">Product Lead</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <div class="stats-premium">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-3 col-6 text-center">
          <div class="stat-number"><span class="counter" data-target="86">0</span>k+</div>
          <div class="stat-label">clients</div>
        </div>
        <div class="col-md-3 col-6 text-center">
          <div class="stat-number"><span class="counter" data-target="32">0</span>k</div>
          <div class="stat-label">jobs posted</div>
        </div>
        <div class="col-md-3 col-6 text-center">
          <div class="stat-number"><span class="counter" data-target="240">0</span>+</div>
          <div class="stat-label">industries</div>
        </div>
        <div class="col-md-3 col-6 text-center">
          <div class="stat-number"><span class="counter" data-target="4.9">0</span>★</div>
          <div class="stat-label">app rating</div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <section class="section-padding">
    <div class="container">
      <div class="cta-premium d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div>
          <h2 class="display-5 fw-bold">Find the job that fits your life</h2>
          <p class="fs-4 opacity-75">Get hired in top companies</p>
        </div>
        <a href="login.html" style="text-decoration: none;" class="btn-cta">Get started →</a>
      </div>
    </div>
  </section>
</div>

<!-- ABOUT PAGE (hidden by default) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/index.js"></script>
<?php
require_once 'footer.php';
?>