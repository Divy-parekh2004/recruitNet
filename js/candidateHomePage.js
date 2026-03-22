        AOS.init({ duration: 800, once: false, mirror: true });

        function startCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const update = () => {
                    const current = parseFloat(counter.innerText.replace('k', '').replace('+', '').replace('★', ''));
                    const inc = target / 70;
                    if (current < target) {
                        let newVal = Math.ceil((current + inc) * 10) / 10;
                        if (newVal > target) newVal = target;
                        counter.innerText = newVal;
                        setTimeout(update, 20);
                    } else {
                        counter.innerText = target;
                    }
                };
                update();
            });
        }

        const stats = document.querySelector('.stats-job');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounters();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.3 });

        if (stats) observer.observe(stats);
