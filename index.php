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
              <button class="search-btn"><i class="fas fa-search me-2"></i>Search</button>
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
            <div class="step-card">
              <div class="step-number">01</div>
              <h5>Complete profile</h5>
              <p>Enhance with skills</p>
            </div>
          </div>
          <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="step-card">
              <div class="step-number">02</div>
              <h5>Create account</h5>
              <p>Easy setup</p>
            </div>
          </div>
          <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="step-card">
              <div class="step-number">03</div>
              <h5>Apply for jobs</h5>
              <p>Seek opportunities</p>
            </div>
          </div>
          <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="step-card">
              <div class="step-number">04</div>
              <h5>Free position</h5>
              <p>Find perfect job</p>
            </div>
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
            <div class="text-start"><strong class="fs-5">Alex Sam Martin</strong><p class="text-muted">Product Lead</p></div>
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
          <button class="btn-cta">Get started →</button>
        </div>
      </div>
    </section>
  </div>

  <!-- ABOUT PAGE (hidden by default) -->
  <div id="about-page" style="display: none;">
    <!-- About Hero -->
    <section class="about-hero" style="padding: 110px 0 50px; margin-top: 76px; background: linear-gradient(145deg, #FFFFFF 0%, #F9FBFF 100%);">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-10" data-aos="fade-up">
            <span class="hero-badge" style="display: inline-block; background: var(--accent-light); color: var(--accent-orange); padding: 8px 24px; border-radius: 40px; font-weight: 600; margin-bottom: 2rem;"><i class="fas fa-bolt me-2"></i>Since 2018 • Global Reach</span>
            <h1 style="font-size: 4rem; font-weight: 800; color: var(--primary-blue);">We're on a Mission to <span style="color: var(--accent-orange);">Transform</span> How The World Hires</h1>
            <p class="lead">What started as a small team of three passionate recruiters has grown into a global platform trusted by over 86,000 companies. But our purpose remains the same: connect talented people with opportunities where they can truly shine.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Founder Quote -->
    <section class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10" data-aos="fade-up">
            <div class="founder-quote-card">
              <div class="founder-quote">"We realized that behind every resume is a human story — with hopes, fears, and dreams. And behind every job posting is a company's vision waiting for the right person to bring it to life. Our mission is to be the bridge that honors both."</div>
              <div class="founder-info d-flex align-items-center gap-4">
                <div class="founder-avatar">MC</div>
                <div class="founder-details">
                  <h4 style="font-size: 1.8rem; font-weight: 700;">Michael Chen</h4>
                  <p>Founder & CEO</p>
                  <div class="founder-signature" style="font-family: cursive; font-size: 1.5rem; opacity: 0.6;">Michael Chen</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mission & Vision -->
    <section class="section-padding bg-light">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="mission-card">
              <div class="mission-icon"><i class="fas fa-bullseye"></i></div>
              <h3>Our Mission</h3>
              <p>To democratize access to meaningful work by creating a platform where skills and potential matter more than credentials.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="mission-card">
              <div class="mission-icon"><i class="fas fa-eye"></i></div>
              <h3>Our Vision</h3>
              <p>A globally connected ecosystem where talent flows freely across borders, industries, and opportunities.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Timeline -->
    <section class="section-padding">
      <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
          <span class="section-subtitle">Our Journey</span>
          <h2 class="section-title">Key <span>Milestones</span></h2>
        </div>
        <div class="timeline" style="position: relative; padding: 4rem 0;">
          <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 4px; height: 100%; background: var(--accent-light);"></div>
          <div class="timeline-item" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4rem; position: relative;" data-aos="fade-right">
            <div class="timeline-content"><span class="timeline-year" style="display: inline-block; background: var(--accent-orange); color: white; padding: 8px 24px; border-radius: 40px; font-weight: 700; margin-bottom: 1rem;">2018</span><h4 style="font-size: 1.8rem; font-weight: 700; color: var(--primary-blue);">The Beginning</h4><p>Founded in a small garage.</p></div>
            <div class="timeline-dot"></div>
          </div>
          <div class="timeline-item" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4rem; position: relative; flex-direction: row-reverse;" data-aos="fade-left">
            <div class="timeline-content"><span class="timeline-year">2020</span><h4>10K Clients</h4><p>Reached 10,000 companies.</p></div>
            <div class="timeline-dot"></div>
          </div>
          <div class="timeline-item" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4rem; position: relative;" data-aos="fade-right">
            <div class="timeline-content"><span class="timeline-year">2022</span><h4>Global Expansion</h4><p>Offices in 12 countries.</p></div>
            <div class="timeline-dot"></div>
          </div>
          <div class="timeline-item" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4rem; position: relative; flex-direction: row-reverse;" data-aos="fade-left">
            <div class="timeline-content"><span class="timeline-year">2024</span><h4>Best Workplace</h4><p>98% satisfaction.</p></div>
            <div class="timeline-dot"></div>
          </div>
          <div class="timeline-item" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4rem; position: relative;" data-aos="fade-right">
            <div class="timeline-content"><span class="timeline-year">2026</span><h4>86K+ Strong</h4><p>Trusted by 86k+ clients.</p></div>
            <div class="timeline-dot"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="section-padding bg-light">
      <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
          <span class="section-subtitle">Leadership</span>
          <h2 class="section-title">Meet Our <span>Team</span></h2>
        </div>
        <div class="row g-3">
          <div class="col-lg-3 col-md-6">
            <div class="team-card">
              <div class="team-image">
                <svg viewBox="0 0 300 300" style="width:100%; height:100%;">
                  <rect width="300" height="300" fill="var(--primary-blue)" opacity="0.1" />
                  <circle cx="150" cy="120" r="50" fill="var(--accent-orange)" opacity="0.3" />
                  <text x="150" y="190" text-anchor="middle" fill="var(--primary-blue)" font-size="60" font-weight="800">MC</text>
                </svg>
                <div class="team-social">
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="team-info" style="padding: 2rem;">
                <h4>Michael Chen</h4>
                <div class="role" style="color: var(--accent-orange); font-weight: 600; margin-bottom: 1rem;">Founder & CEO</div>
                <p>20+ years in HR tech.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-card">
              <div class="team-image">
                <svg viewBox="0 0 300 300">
                  <rect width="300" height="300" fill="var(--primary-blue)" opacity="0.1" />
                  <circle cx="150" cy="120" r="50" fill="var(--accent-orange)" opacity="0.3" />
                  <text x="150" y="190" text-anchor="middle" fill="var(--primary-blue)" font-size="60" font-weight="800">SJ</text>
                </svg>
                <div class="team-social">
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="team-info">
                <h4>Sarah Johnson</h4>
                <div class="role">COO</div>
                <p>Scaled three startups.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-card">
              <div class="team-image">
                <svg viewBox="0 0 300 300">
                  <rect width="300" height="300" fill="var(--primary-blue)" opacity="0.1" />
                  <circle cx="150" cy="120" r="50" fill="var(--accent-orange)" opacity="0.3" />
                  <text x="150" y="190" text-anchor="middle" fill="var(--primary-blue)" font-size="60" font-weight="800">DO</text>
                </svg>
                <div class="team-social">
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                  <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="team-info">
                <h4>David Okonkwo</h4>
                <div class="role">CTO</div>
                <p>AI expert from Meta.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-card">
              <div class="team-image">
                <svg viewBox="0 0 300 300">
                  <rect width="300" height="300" fill="var(--primary-blue)" opacity="0.1" />
                  <circle cx="150" cy="120" r="50" fill="var(--accent-orange)" opacity="0.3" />
                  <text x="150" y="190" text-anchor="middle" fill="var(--primary-blue)" font-size="60" font-weight="800">ER</text>
                </svg>
                <div class="team-social">
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="team-info">
                <h4>Elena Rodriguez</h4>
                <div class="role">Head of Talent</div>
                <p>15 years exec search.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Values -->
    <section class="section-padding">
      <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
          <span class="section-subtitle">What Drives Us</span>
          <h2 class="section-title">Our Core <span>Values</span></h2>
        </div>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon"><i class="fas fa-hand-holding-heart"></i></div>
              <h4>Human First</h4>
              <p>We see people, not profiles. Empathy in every decision.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
              <h4>Innovation</h4>
              <p>Pushing boundaries with AI for better connections.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
              <h4>Integrity</h4>
              <p>Transparent, honest, ethical in every interaction.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial (about) -->
    <section class="section-padding bg-light">
      <div class="container">
        <div class="testimonial-card text-center" data-aos="flip-up">
          <i class="fas fa-quote-right mb-4"></i>
          <p class="fs-4 fst-italic">"RecruitNet didn't just find us employees – they found us family. Their understanding of our company culture was remarkable."</p>
          <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23FF7A3D'/%3E%3Ctext x='30' y='42' font-size='28' text-anchor='middle' fill='%23FFFFFF' font-family='Poppins'%3EJD%3C/text%3E%3C/svg%3E" class="rounded-circle" width="60">
            <div class="text-start"><strong class="fs-5">James Donaldson</strong><p class="text-muted">CEO, TechVision Inc.</p></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats (about) -->
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
            <div class="stat-number"><span class="counter" data-target="98">0</span>%</div>
            <div class="stat-label">satisfaction</div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA (about) -->
    <section class="section-padding">
      <div class="container">
        <div class="cta-premium d-flex flex-column flex-lg-row align-items-center justify-content-between">
          <div>
            <h2 class="display-5 fw-bold">Join Our Journey</h2>
            <p class="fs-4 opacity-75">Be part of something bigger</p>
          </div>
          <button class="btn-cta">Contact us →</button>
        </div>
      </div>
    </section>
  </div>

<?php
require_once 'footer.php';
?>