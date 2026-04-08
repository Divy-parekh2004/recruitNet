<?php
require_once 'header.php';
?>

<style>
  /* --- Resources Premium UI (Matches your aboutUs.css vibe) --- */
  
  /* Search & Filter Section */
  .resource-controls {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 15px 40px rgba(10, 59, 91, 0.06);
    margin-top: -50px; /* Pulls it up into the hero slightly */
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

  /* Premium Resource Cards (Styled like your Value/Mission cards) */
  .resource-card-premium {
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #f1f5f9;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .resource-card-premium:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(10, 59, 91, 0.12);
    border-color: rgba(74, 144, 226, 0.3);
  }

  .resource-img-container {
    position: relative;
    height: 220px;
    overflow: hidden;
  }

  .resource-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
  }

  .resource-card-premium:hover .resource-img-container img {
    transform: scale(1.08);
  }

  .resource-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: rgba(255, 255, 255, 0.95);
    padding: 6px 16px;
    border-radius: 30px;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 0.75rem;
    color: #FF7A3D;
    text-transform: uppercase;
    letter-spacing: 1px;
    backdrop-filter: blur(4px);
    z-index: 2;
  }

  .resource-body {
    padding: 30px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .resource-meta {
    display: flex;
    gap: 15px;
    color: #64748b;
    font-family: 'Inter', sans-serif;
    font-size: 0.85rem;
    margin-bottom: 15px;
  }

  .resource-body h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 1.3rem;
    color: #0A3B5B;
    margin-bottom: 15px;
    line-height: 1.4;
  }

  .resource-body p {
    font-family: 'Inter', sans-serif;
    color: #475569;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 25px;
    flex-grow: 1;
  }

  .read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #4A90E2;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }

  .read-more-btn i {
    transition: transform 0.3s ease;
  }

  .read-more-btn:hover {
    color: #FF7A3D;
  }

  .read-more-btn:hover i {
    transform: translateX(5px);
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
          <div class="hero-badge"><i class="fas fa-book-open me-2"></i>Career Hub • Knowledge Base</div>
          <h1 class="hero-title">
            <span class="line">Master Your</span>
            <span class="line">Career & Hiring</span>
            <span class="line"><span class="highlight">Strategies</span></span>
          </h1>
          <p class="hero-description">Whether you're hunting for your dream job or searching for top-tier talent, our expert guides, industry insights, and proven strategies have you covered.</p>
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
              src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" 
              alt="Team Collaboration" 
              style="width: 100%; height: 100%; object-fit: cover;"
            >
          </div>

          <div class="floating-card floating-card-1">
            <i class="fas fa-chart-line" style="color: #4A90E2;"></i>
            <div><strong>200+ Guides</strong><small>Updated Weekly</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="resource-controls" data-aos="fade-up" data-aos-delay="100">
        <div class="search-wrapper">
          <i class="fas fa-search"></i>
          <input type="text" id="resourceSearch" placeholder="Search for resume tips, interview advice, hiring strategies...">
        </div>
        <div class="filter-group" id="filterContainer">
          <button class="filter-btn active" data-filter="all">All Resources</button>
          <button class="filter-btn" data-filter="candidate">For Candidates</button>
          <button class="filter-btn" data-filter="employer">For Employers</button>
          <button class="filter-btn" data-filter="interview">Interview Prep</button>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="py-5 mt-4">
  <div class="container">
    <div class="row g-4" id="resourceGrid">
      
      <div class="col-lg-4 col-md-6 resource-item" data-category="candidate" data-aos="fade-up" data-aos-delay="50">
        <div class="resource-card-premium">
          <div class="resource-img-container">
            <div class="resource-badge">Resume Tips</div>
            <img 
              src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&q=80" 
              alt="Resume writing"
            >
          </div>
          <div class="resource-body">
            <div class="resource-meta">
              <span><i class="far fa-clock"></i> 6 min read</span>
              <span><i class="far fa-calendar-alt"></i> Apr 2026</span>
            </div>
            <h3>The Ultimate Resume Checklist for 2026</h3>
            <p>Is your resume getting past ATS software? Use our guide to ensure your skills shine through to hiring managers.</p>
            <a href="#" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 resource-item" data-category="interview" data-aos="fade-up" data-aos-delay="150">
        <div class="resource-card-premium">
          <div class="resource-img-container">
            <div class="resource-badge" style="color: #4A90E2;">Interview Prep</div>
            <img 
              src="https://images.unsplash.com/photo-1573164713988-8665fc963095?w=600&q=80" 
              alt="Interviewing"
            >
          </div>
          <div class="resource-body">
            <div class="resource-meta">
              <span><i class="far fa-clock"></i> 10 min read</span>
              <span><i class="far fa-calendar-alt"></i> Mar 2026</span>
            </div>
            <h3>Mastering the Behavioral Interview</h3>
            <p>Nail the "Tell me about a time when..." questions using the STAR method. Real-world examples and templates included.</p>
            <a href="#" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 resource-item" data-category="employer" data-aos="fade-up" data-aos-delay="250">
        <div class="resource-card-premium">
          <div class="resource-img-container">
            <div class="resource-badge" style="color: #0A3B5B;">Hiring Strategies</div>
            <img 
              src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80" 
              alt="Employer Growth"
            >
          </div>
          <div class="resource-body">
            <div class="resource-meta">
              <span><i class="far fa-clock"></i> 8 min read</span>
              <span><i class="far fa-calendar-alt"></i> Feb 2026</span>
            </div>
            <h3>Building a High-Retention Culture</h3>
            <p>Learn the 5 pillars of workplace culture that keep top-tier talent engaged and loyal to your company's mission.</p>
            <a href="#" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 resource-item" data-category="candidate" data-aos="fade-up" data-aos-delay="50">
        <div class="resource-card-premium">
          <div class="resource-img-container">
            <div class="resource-badge">Career Growth</div>
            <img 
              src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=600&q=80" 
              alt="Salary Negotiation"
            >
          </div>
          <div class="resource-body">
            <div class="resource-meta">
              <span><i class="far fa-clock"></i> 5 min read</span>
              <span><i class="far fa-calendar-alt"></i> Jan 2026</span>
            </div>
            <h3>How to Negotiate Your Salary Like a Pro</h3>
            <p>Don't leave money on the table. Discover industry-tested strategies for discussing compensation with your future employer.</p>
            <a href="#" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 resource-item" data-category="employer" data-aos="fade-up" data-aos-delay="150">
        <div class="resource-card-premium">
          <div class="resource-img-container">
            <div class="resource-badge" style="color: #0A3B5B;">Hiring Strategies</div>
            <img 
              src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&q=80" 
              alt="Writing Job Descriptions"
            >
          </div>
          <div class="resource-body">
            <div class="resource-meta">
              <span><i class="far fa-clock"></i> 7 min read</span>
              <span><i class="far fa-calendar-alt"></i> Jan 2026</span>
            </div>
            <h3>Writing Job Postings That Convert</h3>
            <p>Stop losing candidates to boring descriptions. Learn the copywriting secrets that attract the top 1% of industry talent.</p>
            <a href="#" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 resource-item" data-category="interview" data-aos="fade-up" data-aos-delay="250">
        <div class="resource-card-premium">
          <div class="resource-img-container">
            <div class="resource-badge" style="color: #4A90E2;">Interview Prep</div>
            <img 
              src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&q=80" 
              alt="Executive Meeting"
            >
          </div>
          <div class="resource-body">
            <div class="resource-meta">
              <span><i class="far fa-clock"></i> 12 min read</span>
              <span><i class="far fa-calendar-alt"></i> Dec 2025</span>
            </div>
            <h3>Navigating Executive Interviews</h3>
            <p>Interviewing for Director-level requires a different strategy. How to pivot from talking about "tasks" to proving "impact."</p>
            <a href="#" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="cta-cinematic mt-5">
  <div class="container">
    <div class="cta-content">
      <h2 class="cta-title" data-aos="fade-up">Ready To <span>Transform</span> Your Career?</h2>
      <p class="cta-description" data-aos="fade-up" data-aos-delay="100">Join 86,000+ professionals who've found their perfect matches through RecruitNet.</p>
      <a href="register.html" class="cta-button" data-aos="zoom-in" data-aos-delay="200">Create Free Profile <i class="fas fa-arrow-right ms-2"></i></a>
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
    const resourceItems = document.querySelectorAll('.resource-item');
    const searchInput = document.getElementById('resourceSearch');

    // Button Filtering
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filterValue = btn.getAttribute('data-filter');

        resourceItems.forEach(item => {
          if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });

    // Text Searching
    searchInput.addEventListener('input', (e) => {
      const searchTerm = e.target.value.toLowerCase();
      
      resourceItems.forEach(item => {
        const title = item.querySelector('h3').textContent.toLowerCase();
        const desc = item.querySelector('p').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || desc.includes(searchTerm)) {
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