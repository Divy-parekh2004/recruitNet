// AOS init
    AOS.init({ duration: 700, once: false, mirror: true });

    // Page toggle
    function showPage(page) {
      const home = document.getElementById('home-page');
      const about = document.getElementById('about-page');
      const contact = document.getElementById('contact-page');
      const homeLink = document.querySelector('.home-link');
      const aboutLink = document.querySelector('.about-link');
      const contactLink = document.querySelector('.contact-link');
      if (page === 'home') {
        home.style.display = 'block';
        about.style.display = 'none';
        homeLink?.classList.add('active');
        aboutLink?.classList.remove('active');
        contactLink?.classList.remove('active');
      } else if (page === 'about') {
        home.style.display = 'none';
        about.style.display = 'block';
        aboutLink?.classList.add('active');
        homeLink?.classList.remove('active');
      } else if (page === 'contact') {
        home.style.display = 'none';
        about.style.display = 'none';
        contact.style.display = 'block';
        contactLink?.classList.add('active');
        aboutLink?.classList.remove('active');
      }
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

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
      document.querySelectorAll('a, button, .btn, .nav-link, .team-card, .value-card, .mission-card, .service-card, .step-card, .price-tab').forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
      });
    }

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      document.querySelector('.navbar')?.classList.toggle('scrolled', window.scrollY > 40);
    });

    // Counter animation
    function startCounters() {
      document.querySelectorAll('.counter').forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-target'));
        let current = 0;
        const inc = target / 60;
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

    // Observe stats sections
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => { if (entry.isIntersecting) startCounters(); });
    }, { threshold: 0.3 });
    document.querySelectorAll('.stats-premium').forEach(s => observer.observe(s));

    // Newsletter alert
    document.querySelectorAll('.newsletter-wrap button').forEach(btn => {
      btn.addEventListener('click', function () {
        const input = this.previousElementSibling;
        alert(input.value ? 'Thanks for subscribing!' : 'Please enter your email.');
        if (input.value) input.value = '';
      });
    });

    // GSAP animations (balloons and floating elements)
    if (typeof gsap !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);
      gsap.to('.balloon-circle', { y: -20, duration: 3, repeat: -1, yoyo: true, ease: "power1.inOut" });
    }

    // Default to home
    showPage('home');