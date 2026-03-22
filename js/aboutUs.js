AOS.init({ duration: 1000, once: false, mirror: true, offset: 50 });

// Preloader
window.addEventListener('load', function() {
  setTimeout(() => document.querySelector('.preloader')?.classList.add('hidden'), 2000);
});

// Custom Cursor
const cursor = document.querySelector('.custom-cursor');
if (cursor) {
  document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
  });
  document.addEventListener('mousedown', () => cursor.classList.add('hover'));
  document.addEventListener('mouseup', () => cursor.classList.remove('hover'));
  document.querySelectorAll('a, button, .btn, .nav-link, .team-card, .value-card, .mission-card, .contact-info-card').forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
  });
}

// Navbar scroll effect
window.addEventListener('scroll', () => {
  document.querySelector('.navbar')?.classList.toggle('scrolled', window.scrollY > 50);
});

// Counter animation
function animateCounter(element) {
  const target = parseFloat(element.getAttribute('data-target'));
  let current = 0;
  const inc = target / 60;
  const update = () => {
    current += inc;
    if (current < target) {
      element.innerText = Math.ceil(current * 10) / 10;
      requestAnimationFrame(update);
    } else {
      element.innerText = target;
    }
  };
  update();
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.counter').forEach(counter => {
        if (!counter.classList.contains('counted')) {
          animateCounter(counter);
          counter.classList.add('counted');
        }
      });
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('.hero-stats, .stats-premium').forEach(s => observer.observe(s));

// Interactive Timeline
const timelineItems = document.querySelectorAll('.timeline-item');
const progress = document.getElementById('timelineProgress');
if (timelineItems.length && progress) {
  timelineItems.forEach((item, idx) => {
    item.addEventListener('click', () => {
      timelineItems.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      progress.style.width = ((idx + 1) / timelineItems.length) * 100 + '%';
    });
  });
}

// Testimonial Slider
const track = document.getElementById('testimonialTrack');
const dots = document.querySelectorAll('.slider-dot');
if (track && dots.length) {
  let currentSlide = 0;
  function goToSlide(index) {
    currentSlide = index;
    track.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
  }
  dots.forEach((dot, idx) => dot.addEventListener('click', () => goToSlide(idx)));
  setInterval(() => {
    currentSlide = (currentSlide + 1) % dots.length;
    goToSlide(currentSlide);
  }, 5000);
}

// GSAP animations (only floating elements)
if (typeof gsap !== 'undefined') {
  gsap.registerPlugin(ScrollTrigger);
  gsap.to('.floating-card', { y: -20, duration: 2, repeat: -1, yoyo: true, ease: "power1.inOut" });
  gsap.to('.particle', {
    x: 'random(-50,50)',
    y: 'random(-50,50)',
    duration: 'random(3,6)',
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
    stagger: 0.2
  });
}

// Newsletter alert
document.querySelectorAll('.newsletter-premium button, .newsletter-wrap button').forEach(btn => {
  btn.addEventListener('click', function () {
    const input = this.previousElementSibling;
    alert(input.value ? 'Thanks for subscribing!' : 'Please enter your email.');
    if (input.value) input.value = '';
  });
});