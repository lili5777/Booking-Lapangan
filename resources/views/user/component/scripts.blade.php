<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('nav-scroll');
            navbar.classList.remove('py-4');
            navbar.classList.add('py-2');
        } else {
            navbar.classList.remove('nav-scroll');
            navbar.classList.remove('py-2');
            navbar.classList.add('py-4');
        }
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('animate-fade-in-down');
    });

    // Smooth scroll untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Count up animation for stats
    function animateCountUp() {
        const countElements = document.querySelectorAll('.count-up');
        countElements.forEach(element => {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000; // 2 seconds
            const step = target / (duration / 16); // 60fps
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target + (element.getAttribute('data-count') === '98' ? '%' : '+');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + (element.getAttribute('data-count') === '98' ? '%' : '+');
                }
            }, 16);
        });
    }

    // GSAP animations
    gsap.registerPlugin(ScrollTrigger);

    // Animate elements on scroll
    gsap.utils.toArray('.stagger-animation').forEach(section => {
        gsap.fromTo(section.children, {
            opacity: 0,
            y: 50
        }, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2,
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Animate stats when in view
    ScrollTrigger.create({
        trigger: '.count-up',
        start: 'top 80%',
        onEnter: animateCountUp,
        once: true
    });

    // Parallax effect for background elements
    gsap.to('.floating-element', {
        y: 30,
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut"
    });

    // Interactive hover effects
    document.querySelectorAll('.card-hover').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const angleY = (x - centerX) / 10;
            const angleX = (centerY - y) / 10;

            card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });
</script>