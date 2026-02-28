<?php
require_once 'header.php';
/* require_once 'DBconnection.php'; */
// Display status messages (attractive Bootstrap alerts)
if (isset($_GET['status'])) {
  $status = $_GET['status'];
  $alertClass = '';
  $message = '';
  if ($status == 'success') {
    $alertClass = 'alert-success';
    $message = 'Thank you! Your message has been sent. We’ll get back to you within 24 hours.';
  } elseif ($status == 'error') {
    $alertClass = 'alert-danger';
    $message = 'Oops! Something went wrong. Please try again later.';
  } elseif ($status == 'validation_error') {
    $alertClass = 'alert-warning';
    $message = 'Please fill in all required fields correctly.';
  }
  if ($message) {
    echo '<div class="container mt-3"><div class="alert ' . $alertClass . ' alert-dismissible fade show" role="alert">'
      . $message .
      '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
  }
}
?>
<!-- ========== CONTACT HERO ========== -->
<section class="contact-hero">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10" data-aos="fade-up">
        <span class="hero-badge"><i class="fas fa-comment-dots me-2"></i>Get in touch</span>
        <h1>Let’s <span>connect</span> & build something great</h1>
        <p class="lead">Whether you're a company looking for talent or a professional seeking your next role, our team is ready to help. Reach out any time.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== CONTACT INFO CARDS ========== -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-map-pin"></i></div>
          <h4>Visit us</h4>
          <p>500 Howard St<br>San Francisco, CA 94105<br>United States</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
          <h4>Call us</h4>
          <p><a href="tel:+9876543210 ">9876543210</a><br><a href="tel:+9876543210">+9876543210</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-envelope"></i></div>
          <h4>Email</h4>
          <p><a href="mailto:hello@recruitnet.com">Ayushiba@recruitnet.com</a><br><a href="mailto:support@recruitnet.com">zala@recruitnet.com</a></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-clock"></i></div>
          <h4>Office hours</h4>
          <p>Mon–Fri: 9am – 6pm<br>Sat: 10am – 2pm<br>Sun: closed</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CONTACT FORM + PERFECT MAP ========== -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="contact-form-wrapper">
          <!--  <span class="section-subtitle">Send a message</span> -->
          <h2 class="section-title" style="font-size: 2.2rem;">We’d love to <span>hear</span> from you</h2>
          <form method="POST" action="contactProcess.php">
            <div class="form-floating">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
              <label for="name">Full name</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
              <label for="subject">Subject (optional)</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" id="message" name="message" placeholder="Message" style="height: 150px;" required></textarea>
              <label for="message">Your message</label>
            </div>
            <button type="submit" class="btn-submit">Send message <i class="fas fa-paper-plane ms-2"></i></button>
          </form>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="map-container">
          <!-- Google Maps iframe (SF HQ) -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086019577226!2d-122.3980466846815!3d37.79125997975429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858062c6deef41%3A0x3b8c5c0b2d3a0c0e!2s500%20Howard%20St%2C%20San%20Francisco%2C%20CA%2094105%2C%20USA!5e0!3m2!1sen!2s!4v1710000000000!5m2!1sen!2s"
            allowfullscreen=""
            loading="lazy"
            title="RecruitNet Headquarters">
          </iframe>
          <!-- Stylish pin overlay (does not block interaction) -->
          <div class="map-pin"><i class="fas fa-map-marker-alt"></i> RecruitNet HQ</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ========== STATS ========== -->
<div class="stats-premium">
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

<!-- ========== CTA ========== -->
<section class="py-5">
  <div class="container">
    <div class="cta-premium d-flex flex-column flex-lg-row align-items-center justify-content-between" data-aos="fade-up">
      <div>
        <h2 class="display-5 fw-bold">Prefer to talk?</h2>
        <p class="fs-4 opacity-75">Call us directly +9876543210</p>
      </div>
      <button class="btn-cta"><i class="fas fa-headset me-2"></i>Request a call</button>
    </div>
  </div>
</section>

<?php
require_once 'footer.php';
?>