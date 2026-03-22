AOS.init({ duration: 800, once: false, mirror: true });

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
  document.querySelectorAll('a, button, .btn, .nav-link, .contact-info-card').forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
  });
}

// Navbar scroll effect
window.addEventListener('scroll', () => {
  document.querySelector('.navbar')?.classList.toggle('scrolled', window.scrollY > 50);
});

// Counter animation
function startCounters() {
  document.querySelectorAll('.counter').forEach(counter => {
    const target = parseFloat(counter.getAttribute('data-target'));
    let current = 0;
    const inc = target / 70;
    function update() {
      current += inc;
      if (current < target) {
        counter.innerText = Math.ceil(current * 10) / 10;
        requestAnimationFrame(update);
      } else {
        counter.innerText = target;
      }
    }
    update();
  });
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => { if (entry.isIntersecting) startCounters(); });
}, { threshold: 0.3 });
document.querySelectorAll('.stats-premium').forEach(s => observer.observe(s));

// Newsletter alert
document.querySelectorAll('.newsletter-wrap button, .newsletter-premium button').forEach(btn => {
  btn.addEventListener('click', function () {
    const input = this.previousElementSibling;
    alert(input.value ? 'Thanks for subscribing!' : 'Please enter your email.');
    if (input.value) input.value = '';
  });
});

// Contact form submission
/* document.querySelector('form')?.addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Thank you for reaching out! Our team will respond within 24 hours.');
  this.reset();
});
 */
