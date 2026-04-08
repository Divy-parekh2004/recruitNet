<?php
require_once 'header.php';
?>

<style>
  /* --- Talent Page Premium UI --- */
  
  /* Search & Filter Section */
  .talent-controls {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 15px 40px rgba(10, 59, 91, 0.06);
    margin-top: -50px;
    position: relative;
    z-index: 10;
  }

  .search-wrapper {
    position: relative;
  }

  .search-wrapper i {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
    font-size: 1.2rem;
  }

  .search-wrapper input {
    width: 100%;
    padding: 16px 20px 16px 50px;
    border: 2px solid #eef2f5;
    border-radius: 50px;
    font-family: 'Inter', sans-serif;
    font-size: 1rem;
    transition: all 0.3s ease;
    color: #0A3B5B;
  }

  .search-wrapper input:focus {
    border-color: #FF7A3D;
    box-shadow: 0 0 0 4px rgba(255, 122, 61, 0.1);
    outline: none;
  }

  .filter-group {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
  }

  .filter-btn {
    padding: 10px 24px;
    background: #f8f9fa;
    border: 2px solid transparent;
    border-radius: 50px;
    color: #0A3B5B;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .filter-btn:hover {
    background: rgba(74, 144, 226, 0.1);
    color: #4A90E2;
  }

  .filter-btn.active {
    background: #0A3B5B;
    color: #ffffff;
    box-shadow: 0 8px 20px rgba(10, 59, 91, 0.2);
  }

  /* Candidate Premium Cards */
  .talent-card {
    background: #ffffff;
    border-radius: 24px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #f1f5f9;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
  }

  .talent-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(10, 59, 91, 0.12);
    border-color: rgba(74, 144, 226, 0.3);
  }

  /* Top decorative stripe */
  .talent-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, #4A90E2, #FF7A3D);
    opacity: 0;
    transition: opacity 0.4s ease;
  }

  .talent-card:hover::before {
    opacity: 1;
  }

  .talent-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 0 auto 20px;
    padding: 5px;
    background: #f1f5f9;
    position: relative;
  }

  .talent-avatar img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
  }

  .verified-badge {
    position: absolute;
    bottom: 5px;
    right: 5px;
    background: #10b981;
    color: white;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid #fff;
    font-size: 0.75rem;
  }

  .talent-info h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.3rem;
    color: #0A3B5B;
    margin-bottom: 5px;
  }

  .talent-role {
    color: #4A90E2;
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    font-size: 0.95rem;
    margin-bottom: 15px;
  }

  .talent-location {
    color: #64748b;
    font-size: 0.85rem;
    margin-bottom: 20px;
  }

  .talent-skills {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    margin-bottom: 25px;
    flex-grow: 1;
  }

  .skill-tag {
    background: #f1f5f9;
    color: #475569;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    font-family: 'Inter', sans-serif;
  }

  .hire-btn {
    width: 100%;
    padding: 12px;
    background: #ffffff;
    border: 2px solid #eef2f5;
    border-radius: 50px;
    color: #0A3B5B;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .talent-card:hover .hire-btn {
    background: #0A3B5B;
    border-color: #0A3B5B;
    color: #ffffff;
  }
</style>

<section class="about-hero">
  <div class="hero-particles">
    <div class="particle" style="top:20%; left:10%;"></div>
    <div class="particle" style="top:60%; left:20%;"></div>
    <div class="particle" style="top:30%; left:80%;"></div>
    <div class="particle" style="top:70%; left:90%;"></div>
    <div class="particle" style="top:40%; left:40%;"></div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content">
          <div class="hero-badge"><i class="fas fa-bolt me-2"></i>RecruitNet AI Matching</div>
          <h1 class="hero-title">
            <span class="line">Where Skills</span>
            <span class="line">Matter More Than</span>
            <span class="line"><span class="highlight">Credentials</span></span>
          </h1>
          <p class="hero-description">Tap into our globally connected ecosystem. We bypass the traditional resume stack to bring you pre-vetted, elite professionals ready to bring your company's vision to life.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image-wrapper">
          <div class="bubble-container">
            <div class="bubble" style="left: 15%; top: 20%; width: 30px; height: 30px; background: rgba(255,122,61,0.2); animation-delay: 0s;"></div>
            <div class="bubble" style="left: 40%; top: 60%; width: 45px; height: 45px; background: rgba(10,59,91,0.2); animation-delay: 0.8s;"></div>
            <div class="bubble" style="left: 70%; top: 30%; width: 25px; height: 25px; background: rgba(255,180,70,0.2); animation-delay: 1.5s;"></div>
            <div class="bubble" style="left: 80%; top: 70%; width: 50px; height: 50px; background: rgba(74,144,226,0.2); animation-delay: 2.2s;"></div>
          </div>

          <div class="hero-image" style="border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(10,59,91,0.15);">
            <img 
              src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80" 
              alt="Hiring Talent" 
              style="width: 100%; height: 100%; object-fit: cover;"
            >
          </div>

          <div class="floating-card floating-card-1">
            <i class="fas fa-shield-alt" style="color: #10b981;"></i>
            <div><strong>Integrity First</strong><small>Verified Profiles</small></div>
          </div>
          <div class="floating-card floating-card-2" style="bottom: 20px; left: -30px;">
            <i class="fas fa-globe" style="color: #FF7A3D;"></i>
            <div><strong>Borderless</strong><small>Global Talent Flow</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="talent-controls" data-aos="fade-up" data-aos-delay="100">
        <div class="search-wrapper">
          <i class="fas fa-search"></i>
          <input type="text" id="talentSearch" placeholder="Search by role, framework, or language (e.g. 'Java', 'Android')">
        </div>
        <div class="filter-group" id="filterContainer">
          <button class="filter-btn active" data-filter="all">All Talent</button>
          <button class="filter-btn" data-filter="android">Android Dev</button>
          <button class="filter-btn" data-filter="java">Java Backend</button>
          <button class="filter-btn" data-filter="frontend">Frontend & UI</button>
          <button class="filter-btn" data-filter="leadership">Tech Leadership</button>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="py-5 mt-4">
  <div class="container">
    <div class="row g-4" id="talentGrid">
      
      <div class="col-lg-3 col-md-6 talent-item" data-category="android" data-aos="fade-up" data-aos-delay="50">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80" alt="Priya S.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Priya Sharma</h3>
            <div class="talent-role">Senior Android Developer</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> Remote (Global)</div>
            <div class="talent-skills">
              <span class="skill-tag">Android Studio</span>
              <span class="skill-tag">Kotlin</span>
              <span class="skill-tag">Mobile UI</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 talent-item" data-category="java" data-aos="fade-up" data-aos-delay="100">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80" alt="Rahul D.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Rahul Desai</h3>
            <div class="talent-role">Java Backend Engineer</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> Remote (Global)</div>
            <div class="talent-skills">
              <span class="skill-tag">Java OOP</span>
              <span class="skill-tag">Spring Boot</span>
              <span class="skill-tag">Microservices</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 talent-item" data-category="frontend" data-aos="fade-up" data-aos-delay="150">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80" alt="Sarah J.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Sarah Jenkins</h3>
            <div class="talent-role">UI/UX & Frontend</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> London, UK</div>
            <div class="talent-skills">
              <span class="skill-tag">React</span>
              <span class="skill-tag">Figma</span>
              <span class="skill-tag">Tailwind</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 talent-item" data-category="leadership" data-aos="fade-up" data-aos-delay="200">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&q=80" alt="Michael C.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Michael Chen</h3>
            <div class="talent-role">VP of Engineering</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> Toronto, CA</div>
            <div class="talent-skills">
              <span class="skill-tag">System Arch</span>
              <span class="skill-tag">Team Scaling</span>
              <span class="skill-tag">Agile</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 talent-item" data-category="java" data-aos="fade-up" data-aos-delay="50">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?w=400&q=80" alt="James W.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>James Wilson</h3>
            <div class="talent-role">Core Java Developer</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> New York, US</div>
            <div class="talent-skills">
              <span class="skill-tag">Java SE</span>
              <span class="skill-tag">Hibernate</span>
              <span class="skill-tag">SQL</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 talent-item" data-category="android" data-aos="fade-up" data-aos-delay="100">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80" alt="Aisha P.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Aisha Patel</h3>
            <div class="talent-role">Mobile App Engineer</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> Berlin, DE</div>
            <div class="talent-skills">
              <span class="skill-tag">Android</span>
              <span class="skill-tag">Jetpack Compose</span>
              <span class="skill-tag">Firebase</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6 talent-item" data-category="frontend" data-aos="fade-up" data-aos-delay="150">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&q=80" alt="Thomas B.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Thomas Brooks</h3>
            <div class="talent-role">Creative Developer</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> Remote (US)</div>
            <div class="talent-skills">
              <span class="skill-tag">Vue.js</span>
              <span class="skill-tag">Animations</span>
              <span class="skill-tag">CSS3</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 talent-item" data-category="leadership" data-aos="fade-up" data-aos-delay="200">
        <div class="talent-card">
          <div class="talent-avatar">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&q=80" alt="Chloe D.">
            <div class="verified-badge" title="RecruitNet Verified"><i class="fas fa-check"></i></div>
          </div>
          <div class="talent-info">
            <h3>Chloe Dubois</h3>
            <div class="talent-role">Director of Engineering</div>
            <div class="talent-location"><i class="fas fa-map-marker-alt me-1"></i> Paris, FR</div>
            <div class="talent-skills">
              <span class="skill-tag">Tech Strategy</span>
              <span class="skill-tag">Mentoring</span>
              <span class="skill-tag">Cloud Arch</span>
            </div>
            <a href="#" class="hire-btn">View Profile</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="cta-cinematic mt-5">
  <div class="container">
    <div class="cta-content">
      <h2 class="cta-title" data-aos="fade-up">Find The <span>Missing Piece</span> Of Your Company</h2>
      <p class="cta-description" data-aos="fade-up" data-aos-delay="100">Behind every great company is the right person bringing its vision to life. Let's find them together.</p>
      <a href="post-job.html" class="cta-button" data-aos="zoom-in" data-aos-delay="200">Start Hiring Free <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  // Initialize Animations
  AOS.init({
    duration: 800,
    once: true,
  });

  // Filtering and Searching Logic
  document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const talentItems = document.querySelectorAll('.talent-item');
    const searchInput = document.getElementById('talentSearch');

    // Category Filtering
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filterValue = btn.getAttribute('data-filter');

        talentItems.forEach(item => {
          if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });

    // Text Searching (by Name, Role, or Skills)
    searchInput.addEventListener('input', (e) => {
      const searchTerm = e.target.value.toLowerCase();
      
      talentItems.forEach(item => {
        const name = item.querySelector('h3').textContent.toLowerCase();
        const role = item.querySelector('.talent-role').textContent.toLowerCase();
        const skills = item.querySelector('.talent-skills').textContent.toLowerCase();
        
        if (name.includes(searchTerm) || role.includes(searchTerm) || skills.includes(searchTerm)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
</script>

<?php
require_once 'footer.php';
?>